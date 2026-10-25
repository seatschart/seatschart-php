<?php
/**
 * Retry and idempotency helpers for the SeatsChart PHP client.
 * Copied into the generated package (lib/Runtime/Retry.php) by scripts/generate-server-sdks.sh.
 *
 * Throttled (429) and unavailable (503) responses are retried with exponential backoff and full jitter,
 * honouring Retry-After. Only requests that are safe to repeat are retried: idempotent methods (GET, HEAD,
 * OPTIONS, PUT, DELETE) and requests carrying an Idempotency-Key header, which is resent unchanged so the
 * API replays the stored outcome instead of applying it twice.
 *
 *   $http = \SeatsChart\Client\Runtime\Retry::client();          // Guzzle client with the retry middleware
 *   $api  = new \SeatsChart\Client\Api\SeatsApi($http, $config);
 */

namespace SeatsChart\Client\Runtime;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

final class Retry
{
    public const IDEMPOTENCY_KEY_HEADER = 'Idempotency-Key';
    private const IDEMPOTENT_METHODS = ['GET', 'HEAD', 'OPTIONS', 'PUT', 'DELETE'];

    /** @var int */ public $maxAttempts;
    /** @var int */ public $baseDelayMs;
    /** @var int */ public $maxDelayMs;
    /** @var int */ public $maxRetryAfterMs;
    /** @var int[] */ public $statuses;

    public function __construct(int $maxAttempts = 4, int $baseDelayMs = 250, int $maxDelayMs = 8000, int $maxRetryAfterMs = 30000,
        array $statuses = [429, 503])
    {
        if ($maxAttempts < 1) {
            throw new \InvalidArgumentException('maxAttempts must be >= 1');
        }
        $this->maxAttempts = $maxAttempts;
        $this->baseDelayMs = $baseDelayMs;
        $this->maxDelayMs = $maxDelayMs;
        $this->maxRetryAfterMs = $maxRetryAfterMs;
        $this->statuses = $statuses;
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

    /** Guzzle middleware applying this policy. */
    public function middleware(): callable
    {
        $pending = [];
        $decider = function (int $retries, RequestInterface $request, ?ResponseInterface $response = null) use (&$pending): bool {
            if ($response === null || $retries + 1 >= $this->maxAttempts || !in_array($response->getStatusCode(), $this->statuses, true)
                || !self::isRetrySafe($request)) {
                return false;
            }
            $wait = $this->delayMs($retries + 1, self::parseRetryAfterMs($response->getHeaderLine('Retry-After')));
            if ($wait === null) {
                return false;
            }
            $pending[spl_object_id($request)] = $wait;
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

    /** A Guzzle client whose handler stack retries with $policy (default policy when null). */
    public static function client(?self $policy = null, array $config = []): Client
    {
        $stack = $config['handler'] ?? HandlerStack::create();
        $stack->push(($policy ?? new self())->middleware(), 'seatschart_retry');
        return new Client(['handler' => $stack] + $config);
    }
}
