<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents a boost removed from a chat.
 *
 * @see https://core.telegram.org/bots/api#chatboostremoved
 */
final class ChatBoostRemoved
{
    /**
     * @param Chat $chat Chat which was boosted
     * @param string $boostId Unique identifier of the boost
     * @param int $removeDate Point in time (Unix timestamp) when the boost was removed
     * @param ChatBoostSource $source Source of the removed boost
    */
    public function __construct
    (
         private Chat $chat,
         private string $boostId,
         private int $removeDate,
         private ChatBoostSource $source
    ) {}
    
    /**
     * @return Chat
     */
    public function getChat(): Chat
    {
        return $this->chat;
    }

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
    public function getRemoveDate(): int
    {
        return $this->removeDate;
    }

    /**
     * @return ChatBoostSource
     */
    public function getSource(): ChatBoostSource
    {
        return $this->source;
    }
}
