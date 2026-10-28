<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes the connection of the bot with a business account.
 *
 * @see https://core.telegram.org/bots/api#businessconnection
 */
final class BusinessConnection
{
    /**
     * @param string $id Unique identifier of the business connection
     * @param User $user Business account user that created the business connection
     * @param int $userChatId Identifier of a private chat with the user who created the business connection. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param int $date Date the connection was established in Unix time
     * @param bool $isEnabled True, if the connection is active
     * @param BusinessBotRights|null $rights Optional. Rights of the business bot
    */
    public function __construct
    (
         private string $id,
         private User $user,
         private int $userChatId,
         private int $date,
         private bool $isEnabled,
         private ?BusinessBotRights $rights = null
    ) {}
    
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @return int
     */
    public function getUserChatId(): int
    {
        return $this->userChatId;
    }

    /**
     * @return int
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * @return bool
     */
    public function getIsEnabled(): bool
    {
        return $this->isEnabled;
    }

    /**
     * @return BusinessBotRights|null
     */
    public function getRights(): ?BusinessBotRights
    {
        return $this->rights;
    }
}
