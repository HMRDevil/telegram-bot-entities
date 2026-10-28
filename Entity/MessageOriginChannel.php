<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * The message was originally sent to a channel chat.
 *
 * @see https://core.telegram.org/bots/api#messageoriginchannel
 */
final class MessageOriginChannel
{
    /**
     * @param string $type Type of the message origin, always "channel"
     * @param int $date Date the message was sent originally in Unix time
     * @param Chat $chat Channel chat to which the message was originally sent
     * @param int $messageId Unique message identifier inside the chat
     * @param string|null $authorSignature Optional. Signature of the original post author
    */
    public function __construct
    (
         private string $type,
         private int $date,
         private Chat $chat,
         private int $messageId,
         private ?string $authorSignature = null
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getDate(): int
    {
        return $this->date;
    }

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
     * @return string|null
     */
    public function getAuthorSignature(): ?string
    {
        return $this->authorSignature;
    }
}
