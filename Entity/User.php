<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents a Telegram user or bot.
 *
 * @see https://core.telegram.org/bots/api#user
 */
final class User
{
    /**
     * @param int $id Unique identifier for this user or bot. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param bool $isBot True, if this user is a bot
     * @param string $firstName User's or bot's first name
     * @param string|null $lastName Optional. User's or bot's last name
     * @param string|null $username Optional. User's or bot's username
     * @param string|null $languageCode Optional. IETF language tag of the user's language
     * @param bool|null $isPremium Optional. True, if this user is a Telegram Premium user
     * @param bool|null $addedToAttachmentMenu Optional. True, if this user added the bot to the attachment menu
     * @param bool|null $canJoinGroups Optional. True, if the bot can be invited to groups. Returned only in getMe.
     * @param bool|null $canReadAllGroupMessages Optional. True, if privacy mode is disabled for the bot. Returned only in getMe.
     * @param bool|null $supportsGuestQueries Optional. True, if the bot supports guest queries from chats it is not a member of. Returned only in getMe.
     * @param bool|null $supportsInlineQueries Optional. True, if the bot supports inline queries. Returned only in getMe.
     * @param bool|null $canConnectToBusiness Optional. True, if the bot can be connected to a user account to manage it. Returned only in getMe.
     * @param bool|null $hasMainWebApp Optional. True, if the bot has a main Web App. Returned only in getMe.
     * @param bool|null $hasTopicsEnabled Optional. True, if the bot has forum topic mode enabled in private chats. Returned only in getMe.
     * @param bool|null $allowsUsersToCreateTopics Optional. True, if the bot allows users to create and delete topics in private chats. Returned only in getMe.
     * @param bool|null $canManageBots Optional. True, if other bots can be created to be controlled by the bot. Returned only in getMe.
    */
    public function __construct
    (
         private int $id,
         private bool $isBot,
         private string $firstName,
         private ?string $lastName = null,
         private ?string $username = null,
         private ?string $languageCode = null,
         private ?bool $isPremium = null,
         private ?bool $addedToAttachmentMenu = null,
         private ?bool $canJoinGroups = null,
         private ?bool $canReadAllGroupMessages = null,
         private ?bool $supportsGuestQueries = null,
         private ?bool $supportsInlineQueries = null,
         private ?bool $canConnectToBusiness = null,
         private ?bool $hasMainWebApp = null,
         private ?bool $hasTopicsEnabled = null,
         private ?bool $allowsUsersToCreateTopics = null,
         private ?bool $canManageBots = null
    ) {}
    
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return bool
     */
    public function getIsBot(): bool
    {
        return $this->isBot;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
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
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * @return string|null
     */
    public function getLanguageCode(): ?string
    {
        return $this->languageCode;
    }

    /**
     * @return bool|null
     */
    public function getIsPremium(): ?bool
    {
        return $this->isPremium;
    }

    /**
     * @return bool|null
     */
    public function getAddedToAttachmentMenu(): ?bool
    {
        return $this->addedToAttachmentMenu;
    }

    /**
     * @return bool|null
     */
    public function getCanJoinGroups(): ?bool
    {
        return $this->canJoinGroups;
    }

    /**
     * @return bool|null
     */
    public function getCanReadAllGroupMessages(): ?bool
    {
        return $this->canReadAllGroupMessages;
    }

    /**
     * @return bool|null
     */
    public function getSupportsGuestQueries(): ?bool
    {
        return $this->supportsGuestQueries;
    }

    /**
     * @return bool|null
     */
    public function getSupportsInlineQueries(): ?bool
    {
        return $this->supportsInlineQueries;
    }

    /**
     * @return bool|null
     */
    public function getCanConnectToBusiness(): ?bool
    {
        return $this->canConnectToBusiness;
    }

    /**
     * @return bool|null
     */
    public function getHasMainWebApp(): ?bool
    {
        return $this->hasMainWebApp;
    }

    /**
     * @return bool|null
     */
    public function getHasTopicsEnabled(): ?bool
    {
        return $this->hasTopicsEnabled;
    }

    /**
     * @return bool|null
     */
    public function getAllowsUsersToCreateTopics(): ?bool
    {
        return $this->allowsUsersToCreateTopics;
    }

    /**
     * @return bool|null
     */
    public function getCanManageBots(): ?bool
    {
        return $this->canManageBots;
    }
}
