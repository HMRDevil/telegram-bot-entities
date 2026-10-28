<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object contains information about a chat boost.
 *
 * @see https://core.telegram.org/bots/api#chatboost
 */
final class ChatBoost
{
    /**
     * @param string $boostId Unique identifier of the boost
     * @param int $addDate Point in time (Unix timestamp) when the chat was boosted
     * @param int $expirationDate Point in time (Unix timestamp) when the boost will automatically expire, unless the booster's Telegram Premium subscription is prolonged
     * @param ChatBoostSource $source Source of the added boost
    */
    public function __construct
    (
         private string $boostId,
         private int $addDate,
         private int $expirationDate,
         private ChatBoostSource $source
    ) {}
    
    /**
     * @return string
     */
    public function getBoostId(): string
    {
        return $this->boostId;
    }

    /**
     * @return int
     */
    public function getAddDate(): int
    {
        return $this->addDate;
    }

    /**
     * @return int
     */
    public function getExpirationDate(): int
    {
        return $this->expirationDate;
    }

    /**
     * @return ChatBoostSource
     */
    public function getSource(): ChatBoostSource
    {
        return $this->source;
    }
}
