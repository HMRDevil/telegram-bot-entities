<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents a service message about a user boosting a chat.
 *
 * @see https://core.telegram.org/bots/api#chatboostadded
 */
final class ChatBoostAdded
{
    /**
     * @param int $boostCount Number of boosts added by the user
    */
    public function __construct
    (
         private int $boostCount
    ) {}
    
    /**
     * @return int
     */
    public function getBoostCount(): int
    {
        return $this->boostCount;
    }
}
