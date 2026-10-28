<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents reaction changes on a message with anonymous reactions.
 *
 * @see https://core.telegram.org/bots/api#messagereactioncountupdated
 */
final class MessageReactionCountUpdated
{
    /**
     * @param Chat $chat The chat containing the message
     * @param int $messageId Unique message identifier inside the chat
     * @param int $date Date of the change in Unix time
     * @param ReactionCount[] $reactions List of reactions that are present on the message
    */
    public function __construct
    (
         private Chat $chat,
         private int $messageId,
         private int $date,
         private array $reactions
    ) {}
    
    /**
     * @return Chat
     */
    public function getChat(): Chat
    {
        return $this->chat;
    }

    /**
     * @return int
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * @return int
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * @return ReactionCount[]
     */
    public function getReactions(): array
    {
        return $this->reactions;
    }
}
