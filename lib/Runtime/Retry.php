<?php
/**
 * Retry, timeout and idempotency helpers for the SeatsChart PHP client.
 * Copied into the generated package (lib/Runtime/Retry.php) by scripts/generate-server-sdks.sh.
 *
 * Throttled (429) and unavailable (503) responses are retried with exponential backoff and full jitter,
 * honouring Retry-After. Only requests that are safe to repeat are retried: idempotent methods (GET, HEAD,
 * OPTIONS, PUT, DELETE) and requests carrying an Idempotency-Key header, which is resent unchanged so the
 * API replays the stored outcome instead of applying it twice.
 *
 * Every attempt is bounded, as in seats.io's SDKs: Guzzle 'connect_timeout' 10 s and 'timeout' 30 s (per transfer,
 * so per attempt; 0 disables one). A timed-out attempt is retried like a 503 when it is safe to repeat; the last one
 * fails with TimeoutException (a Guzzle ConnectException whose getErrorCode() is 'timeout').
 *
 *   $http = \SeatsChart\Client\Runtime\Retry::client();          // Guzzle client with retries and timeouts
 *   $api  = new \SeatsChart\Client\Api\SeatsApi($http, $config);
 */

namespace SeatsChart\Client\Runtime;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Promise\Create;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

final class Retry
{
    public const IDEMPOTENCY_KEY_HEADER = 'Idempotency-Key';
    public const DEFAULT_CONNECT_TIMEOUT = 10.0;
    public const DEFAULT_TIMEOUT = 30.0;
    private const IDEMPOTENT_METHODS = ['GET', 'HEAD', 'OPTIONS', 'PUT', 'DELETE'];

    /** @var int */ public $maxAttempts;
    /** @var int */ public $baseDelayMs;
    /** @var int */ public $maxDelayMs;
    /** @var int */ public $maxRetryAfterMs;
    /** @var int[] */ public $statuses;
    /** @var float Seconds per attempt (Guzzle 'timeout'; 0 = none). */ public $timeout;
    /** @var float Seconds to connect (Guzzle 'connect_timeout'; 0 = none). */ public $connectTimeout;
    /** @var bool Retry a timed-out attempt when the request is safe to repeat. */ public $retryOnTimeout;
    /** @var array<int, int> Attempts made per request (spl_object_id), for TimeoutException. */ private $attempts = [];

    public function __construct(int $maxAttempts = 4, int $baseDelayMs = 250, int $maxDelayMs = 8000, int $maxRetryAfterMs = 30000,
        array $statuses = [429, 503], float $timeout = self::DEFAULT_TIMEOUT, float $connectTimeout = self::DEFAULT_CONNECT_TIMEOUT,
        bool $retryOnTimeout = true)
    {
        if ($maxAttempts < 1) {
            throw new \InvalidArgumentException('maxAttempts must be >= 1');
        }
        if ($timeout < 0 || $connectTimeout < 0) {
            throw new \InvalidArgumentException('timeouts must be >= 0');
        }
        $this->maxAttempts = $maxAttempts;
        $this->baseDelayMs = $baseDelayMs;
        $this->maxDelayMs = $maxDelayMs;
        $this->maxRetryAfterMs = $maxRetryAfterMs;
        $this->statuses = $statuses;
        $this->timeout = $timeout;
        $this->connectTimeout = $connectTimeout;
        $this->retryOnTimeout = $retryOnTimeout;
    }

    /** A fresh key for one logical operation; reuse it for every retry of that operation. */
    public static function newIdempotencyKey(): string
    {
        $b = random_bytes(16);
        $b[6] = chr((ord($b[6]) & 0x0f) | 0x40);
        $b[8] = chr((ord($b[8]) & 0x3f) | 0x80);
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($b), 4));
    }

    /** ['Idempotency-Key' => $key] for the generated API methods' headers. */
    public static function idempotencyHeaders(?string $key = null): array
    {
        return [self::IDEMPOTENCY_KEY_HEADER => $key ?? self::newIdempotencyKey()];
    }

    public static function isRetrySafe(RequestInterface $request): bool
    {
        if (in_array(strtoupper($request->getMethod()), self::IDEMPOTENT_METHODS, true)) {
            return true;
        }
        return trim($request->getHeaderLine(self::IDEMPOTENCY_KEY_HEADER)) !== '';
    }

    /**
     * True for a transfer that hit a timeout: cURL error 28 (CURLE_OPERATION_TIMEDOUT) or a stream handler
     * "timed out" ConnectException, a TimeoutException, or an exception caused by one.
     */
    public static function isTimeout(?\Throwable $error): bool
    {
        for ($e = $error; $e !== null; $e = $e->getPrevious()) {
            if ($e instanceof TimeoutException) {
                return true;
            }
            if ($e instanceof ConnectException) {
                $context = $e->getHandlerContext();
                if ((isset($context['errno']) && (int) $context['errno'] === 28) || stripos($e->getMessage(), 'timed out') !== false) {
                    return true;
                }
            }
        }
        return false;
    }

    /** Retry-After in milliseconds (delta-seconds or HTTP date); null when absent or invalid. */
    public static function parseRetryAfterMs(string $value, ?int $now = null): ?int
    {
        $raw = trim($value);
        if ($raw === '') {
            return null;
        }
        if (preg_match('/^\d+(\.\d+)?$/', $raw)) {
            return (int) round(((float) $raw) * 1000);
        }
        $at = strtotime($raw);
        if ($at === false) {
            return null;
        }
        return max(0, ($at - ($now ?? time())) * 1000);
    }

    /** Wait before retry number $attempt (1-based); null when Retry-After is too long to wait. */
    public function delayMs(int $attempt, ?int $retryAfterMs, ?callable $random = null): ?int
    {
        if ($retryAfterMs !== null) {
            return $retryAfterMs > $this->maxRetryAfterMs ? null : $retryAfterMs;
        }
        $ceiling = min($this->maxDelayMs, $this->baseDelayMs * (2 ** max(0, $attempt - 1)));
        $r = $random !== null ? $random() : mt_rand() / mt_getrandmax();
        return (int) floor($r * $ceiling);
    }

    /** Guzzle request options of the timeouts (client() puts them under the caller's own options). */
    public function timeoutOptions(): array
    {
        return ['connect_timeout' => $this->connectTimeout, 'timeout' => $this->timeout];
    }

    /** Guzzle middleware applying this policy. */
    public function middleware(): callable
    {
        $pending = [];
        $decider = function (int $retries, RequestInterface $request, ?ResponseInterface $response = null, ?\Throwable $error = null) use (&$pending): bool {
            $id = spl_object_id($request);
            $this->attempts[$id] = $retries + 1;
            if ($retries + 1 >= $this->maxAttempts || !self::isRetrySafe($request)) {
                return false;
            }
            if ($response === null) {
                if (!$this->retryOnTimeout || !self::isTimeout($error)) {
                    return false;
                }
                $pending[$id] = $this->delayMs($retries + 1, null);
                return true;
            }
            if (!in_array($response->getStatusCode(), $this->statuses, true)) {
                return false;
            }
            $wait = $this->delayMs($retries + 1, self::parseRetryAfterMs($response->getHeaderLine('Retry-After')));
            if ($wait === null) {
                return false;
            }
            $pending[$id] = $wait;
            return true;
        };
        $delay = function (int $retries, ?ResponseInterface $response = null, ?RequestInterface $request = null) use (&$pending): int {
            $id = $request !== null ? spl_object_id($request) : null;
            $wait = $id !== null && isset($pending[$id]) ? $pending[$id] : 0;
            if ($id !== null) {
                unset($pending[$id]);
            }
            return $wait;
        };
        return Middleware::retry($decider, $delay);
    }

    /** Guzzle middleware, outside the retry middleware, turning the final timeout into a TimeoutException. */
    public function timeoutMiddleware(): callable
    {
        return function (callable $handler): callable {
            return function (RequestInterface $request, array $options) use ($handler) {
                $id = spl_object_id($request);
                return $handler($request, $options)->then(function ($response) use ($id) {
                    unset($this->attempts[$id]);
                    return $response;
                }, function ($reason) use ($id) {
                    $attempts = $this->attempts[$id] ?? 1;
                    unset($this->attempts[$id]);
                    if ($reason instanceof ConnectException && !($reason instanceof TimeoutException) && self::isTimeout($reason)) {
                        $reason = new TimeoutException($reason, $this->timeout, $attempts);
                    }
                    return Create::rejectionFor($reason);
                });
            };
        };
    }

    /**
     * A Guzzle client whose handler stack retries with $policy (default policy when null), with the policy's
     * 'connect_timeout' and 'timeout' unless $config sets its own.
     */
    public static function client(?self $policy = null, array $config = []): Client
    {
        $policy = $policy ?? new self();
        $stack = $config['handler'] ?? HandlerStack::create();
        $stack->push($policy->middleware(), 'seatschart_retry');
        // Outermost (the first middleware of a stack wraps all the others), so it sees the outcome after the retries.
        $stack->unshift($policy->timeoutMiddleware(), 'seatschart_timeout');
        return new Client(['handler' => $stack] + $config + $policy->timeoutOptions());
    }
}
