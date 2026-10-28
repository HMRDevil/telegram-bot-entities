<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object describes a message that was deleted or is otherwise inaccessible to the bot.
 *
 * @see https://core.telegram.org/bots/api#inaccessiblemessage
 */
final class InaccessibleMessage
{
    /**
     * @param Chat $chat Chat the message belonged to
     * @param int $messageId Unique message identifier inside the chat
     * @param int $date Always 0. The field can be used to differentiate regular and inaccessible messages.
    */
    public function __construct
    (
         private Chat $chat,
         private int $messageId,
         private int $date
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
}
