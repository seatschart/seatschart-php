<?php
/**
 * A request whose last attempt timed out (connect or transfer). Copied into the generated package
 * (lib/Runtime/TimeoutException.php) by scripts/generate-server-sdks.sh.
 *
 * The outcome on the server is unknown: retry writes with the same Idempotency-Key. It is a Guzzle
 * ConnectException, so existing handling still applies; the original exception is getPrevious().
 */

namespace SeatsChart\Client\Runtime;

use GuzzleHttp\Exception\ConnectException;

final class TimeoutException extends ConnectException
{
    public const CODE = 'timeout';

    /** @var float */ private $timeout;
    /** @var int */ private $attempts;

    public function __construct(ConnectException $previous, float $timeout, int $attempts)
    {
        parent::__construct(
            sprintf('SeatsChart API request timed out (%s %s, timeout %ss, %d attempt(s))', $previous->getRequest()->getMethod(),
                $previous->getRequest()->getUri()->getPath(), $timeout, $attempts),
            $previous->getRequest(),
            $previous,
            $previous->getHandlerContext()
        );
        $this->timeout = $timeout;
        $this->attempts = $attempts;
    }

    /** Stable error code ('timeout'); getCode() keeps PHP's integer code. */
    public function getErrorCode(): string
    {
        return self::CODE;
    }

    /** The per-attempt timeout of the policy, in seconds. */
    public function getTimeout(): float
    {
        return $this->timeout;
    }

    public function getAttempts(): int
    {
        return $this->attempts;
    }
}
