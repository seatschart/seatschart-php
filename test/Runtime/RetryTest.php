<?php
// PHPUnit test of the retry runtime against Guzzle's MockHandler (run inside the generated package by CI).

namespace SeatsChart\Client\Test\Runtime;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use SeatsChart\Client\Runtime\Retry;

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
