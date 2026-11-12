<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * The message was originally sent on behalf of a chat to a group chat.
 *
 * @see https://core.telegram.org/bots/api#messageoriginchat
 */
final class MessageOriginChat
{
    /**
     * @var string $type Type of the message origin, always “chat”
     */
    private string $type = 'chat';

    /**
     * @param int $date Date the message was sent originally in Unix time
     * @param Chat $senderChat Chat that sent the message originally
     * @param string|null $authorSignature Optional. For messages originally sent by an anonymous chat administrator, original message author signature
    */
    public function __construct
    (
         private int $date,
         private Chat $senderChat,
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
    public function getSenderChat(): Chat
    {
        return $this->senderChat;
    }

    /**
     * @return string|null
     */
    public function getAuthorSignature(): ?string
    {
        return $this->authorSignature;
    }
}
