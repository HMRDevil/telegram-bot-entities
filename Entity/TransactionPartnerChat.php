<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a transaction with a chat.
 *
 * @see https://core.telegram.org/bots/api#transactionpartnerchat
 */
final class TransactionPartnerChat
{
    /**
     * @param string $type Type of the transaction partner, always "chat"
     * @param Chat $chat Information about the chat
     * @param Gift|null $gift Optional. The gift sent to the chat by the bot
    */
    public function __construct
    (
         private string $type,
         private Chat $chat,
         private ?Gift $gift = null
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return Chat
     */
    public function getChat(): Chat
    {
        return $this->chat;
    }

    /**
     * @return Gift|null
     */
    public function getGift(): ?Gift
    {
        return $this->gift;
    }
}
