<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object is received when messages are deleted from a connected business account.
 *
 * @see https://core.telegram.org/bots/api#businessmessagesdeleted
 */
final class BusinessMessagesDeleted
{
    /**
     * @param string $businessConnectionId Unique identifier of the business connection
     * @param Chat $chat Information about a chat in the business account. The bot may not have access to the chat or the corresponding user.
     * @param Integer[] $messageIds The list of identifiers of deleted messages in the chat of the business account
    */
    public function __construct
    (
         private string $businessConnectionId,
         private Chat $chat,
         private array $messageIds
    ) {}
    
    /**
     * @return string
     */
    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
    }

    /**
     * @return Chat
     */
    public function getChat(): Chat
    {
        return $this->chat;
    }

    /**
     * @return Integer[]
     */
    public function getMessageIds(): array
    {
        return $this->messageIds;
    }
}
