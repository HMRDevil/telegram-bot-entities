<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes why a request was unsuccessful.
 *
 * @see https://core.telegram.org/bots/api#responseparameters
 */
final class ResponseParameters
{
    /**
     * @param int|null $migrateToChatId Optional. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param int|null $retryAfter Optional. In case of exceeding flood control, the number of seconds left to wait before the request can be repeated
    */
    public function __construct
    (
         private ?int $migrateToChatId = null,
         private ?int $retryAfter = null
    ) {}
    
    /**
     * @return int|null
     */
    public function getMigrateToChatId(): ?int
    {
        return $this->migrateToChatId;
    }

    /**
     * @return int|null
     */
    public function getRetryAfter(): ?int
    {
        return $this->retryAfter;
    }
}
