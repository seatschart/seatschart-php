<?php
// PHPUnit test of the retry runtime against Guzzle's MockHandler (run inside the generated package by CI).

namespace SeatsChart\Client\Test\Runtime;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use SeatsChart\Client\Runtime\Retry;
use SeatsChart\Client\Runtime\TimeoutException;

final class RetryTest extends TestCase
{
    /**
     * Retry outside, history inside it, so every attempt is recorded. A HandlerStack wraps the first pushed
     * middleware outermost: history is pushed after Retry::client() pushed the retry middleware.
     */
    private function client(array $responses, \ArrayObject $history): Client
    {
        $stack = HandlerStack::create(new MockHandler($responses));
        $client = Retry::client(new Retry(4, 1, 8, 30000), ['handler' => $stack, 'http_errors' => false]);
        $stack->push(Middleware::history($history));
        return $client;
    }

    public function testKeyedPostRetriesWithSameKey(): void
    {
        $history = new \ArrayObject();
        $client = $this->client([new Response(429, ['Retry-After' => '0']), new Response(200)], $history);
        $response = $client->send(new Request('POST', 'http://api.test/api/seats/reserve', Retry::idempotencyHeaders('order-5'), '{}'));
        $this->assertSame(200, $response->getStatusCode());
        $this->assertCount(2, $history);
        foreach ($history as $entry) {
            $this->assertSame('order-5', $entry['request']->getHeaderLine('Idempotency-Key'));
        }
    }

    public function testUnkeyedPostIsNotRetried(): void
    {
        $history = new \ArrayObject();
        $client = $this->client([new Response(503), new Response(200)], $history);
        $this->assertSame(503, $client->send(new Request('POST', 'http://api.test/api/viewer-tokens', [], '{}'))->getStatusCode());
        $this->assertCount(1, $history);
    }

    public function testGetGivesUpAfterMaxAttempts(): void
    {
        $history = new \ArrayObject();
        $client = $this->client(array_fill(0, 5, new Response(503)), $history);
        $this->assertSame(503, $client->send(new Request('GET', 'http://api.test/api/events'))->getStatusCode());
        $this->assertCount(4, $history);
    }

    private static function timedOut(string $method, string $uri): ConnectException
    {
        return new ConnectException('cURL error 28: Operation timed out', new Request($method, $uri), null, ['errno' => 28]);
    }

    public function testDefaultTimeoutsAreClientOptions(): void
    {
        $client = Retry::client();
        $this->assertSame(10.0, $client->getConfig('connect_timeout'));
        $this->assertSame(30.0, $client->getConfig('timeout'));
        $own = Retry::client(null, ['timeout' => 5]);
        $this->assertSame(5, $own->getConfig('timeout'));
        $this->assertSame([0.0, 0.0], array_values((new Retry(4, 250, 8000, 30000, [429, 503], 0.0, 0.0))->timeoutOptions()));
    }

    public function testTimedOutGetIsRetriedThenThrowsTimeoutException(): void
    {
        $history = new \ArrayObject();
        $client = $this->client([self::timedOut('GET', 'http://api.test/api/events'), self::timedOut('GET', 'http://api.test/api/events'),
            self::timedOut('GET', 'http://api.test/api/events'), self::timedOut('GET', 'http://api.test/api/events')], $history);
        try {
            $client->send(new Request('GET', 'http://api.test/api/events'));
            $this->fail('expected a TimeoutException');
        } catch (TimeoutException $e) {
            $this->assertSame('timeout', $e->getErrorCode());
            $this->assertSame(4, $e->getAttempts());
            $this->assertTrue(Retry::isTimeout($e));
        }
        $this->assertCount(4, $history);
    }

    public function testTimedOutKeyedPostIsRetriedWithTheSameKey(): void
    {
        $history = new \ArrayObject();
        $client = $this->client([self::timedOut('POST', 'http://api.test/api/seats/reserve'), new Response(200)], $history);
        $response = $client->send(new Request('POST', 'http://api.test/api/seats/reserve', Retry::idempotencyHeaders('order-9'), '{}'));
        $this->assertSame(200, $response->getStatusCode());
        $this->assertCount(2, $history);
        foreach ($history as $entry) {
            $this->assertSame('order-9', $entry['request']->getHeaderLine('Idempotency-Key'));
        }
    }

    public function testTimedOutUnkeyedPostIsNotResent(): void
    {
        $history = new \ArrayObject();
        $client = $this->client([self::timedOut('POST', 'http://api.test/api/viewer-tokens'), new Response(200)], $history);
        try {
            $client->send(new Request('POST', 'http://api.test/api/viewer-tokens', [], '{}'));
            $this->fail('expected a TimeoutException');
        } catch (TimeoutException $e) {
            $this->assertSame(1, $e->getAttempts());
        }
        $this->assertCount(1, $history);
    }

    public function testOtherConnectErrorsAreNotTimeouts(): void
    {
        $refused = new ConnectException('cURL error 7: Failed to connect', new Request('GET', 'http://api.test/x'), null, ['errno' => 7]);
        $this->assertFalse(Retry::isTimeout($refused));
        $this->assertTrue(Retry::isTimeout(new \RuntimeException('wrapped', 0, self::timedOut('GET', 'http://api.test/x'))));
    }

    public function testPolicyMath(): void
    {
        $p = new Retry();
        $this->assertSame(125, $p->delayMs(1, null, fn () => 0.5));
        $this->assertSame(8000, $p->delayMs(30, null, fn () => 1.0));
        $this->assertSame(1500, $p->delayMs(1, 1500));
        $this->assertNull($p->delayMs(1, 3600000));
        $this->assertSame(2000, Retry::parseRetryAfterMs('2'));
        $this->assertNull(Retry::parseRetryAfterMs('soon'));
        $this->assertNotSame(Retry::newIdempotencyKey(), Retry::newIdempotencyKey());
    }
}
