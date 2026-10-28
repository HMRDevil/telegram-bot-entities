<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents a boost added to a chat or changed.
 *
 * @see https://core.telegram.org/bots/api#chatboostupdated
 */
final class ChatBoostUpdated
{
    /**
     * @param Chat $chat Chat which was boosted
     * @param ChatBoost $boost Information about the chat boost
    */
    public function __construct
    (
         private Chat $chat,
         private ChatBoost $boost
    ) {}
    
    /**
     * @return Chat
     */
    public function getChat(): Chat
    {
        return $this->chat;
    }

    /**
     * @return ChatBoost
     */
    public function getBoost(): ChatBoost
    {
        return $this->boost;
    }
}
