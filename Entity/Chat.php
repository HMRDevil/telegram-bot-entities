<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents a chat.
 *
 * @see https://core.telegram.org/bots/api#chat
 */
final class Chat
{
    /**
     * @param int $id Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param string $type Type of the chat, can be either “private”, “group”, “supergroup” or “channel”
     * @param string|null $title Optional. Title, for supergroups, channels and group chats
     * @param string|null $username Optional. Username, for private chats, supergroups and channels if available
     * @param string|null $firstName Optional. First name of the other party in a private chat
     * @param string|null $lastName Optional. Last name of the other party in a private chat
     * @param true|null $isForum Optional. True, if the supergroup chat is a forum (has topics enabled)
     * @param true|null $isDirectMessages Optional. True, if the chat is the direct messages chat of a channel
    */
    public function __construct
    (
         private int $id,
         private string $type,
         private ?string $title = null,
         private ?string $username = null,
         private ?string $firstName = null,
         private ?string $lastName = null,
         private ?true $isForum = null,
         private ?true $isDirectMessages = null
    ) {}
    
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @return true|null
     */
    public function getIsForum(): ?true
    {
        return $this->isForum;
    }

    /**
     * @return true|null
     */
    public function getIsDirectMessages(): ?true
    {
        return $this->isDirectMessages;
    }
}
