<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object contains information about a user that was shared with the bot using a KeyboardButtonRequestUsers button.
 *
 * @see https://core.telegram.org/bots/api#shareduser
 */
final class SharedUser
{
    /**
     * @param int $userId Identifier of the shared user. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so 64-bit integers or double-precision float types are safe for storing these identifiers. The bot may not have access to the user and could be unable to use this identifier, unless the user is already known to the bot by some other means.
     * @param string|null $firstName Optional. First name of the user, if the name was requested by the bot
     * @param string|null $lastName Optional. Last name of the user, if the name was requested by the bot
     * @param string|null $username Optional. Username of the user, if the username was requested by the bot
     * @param PhotoSize[]|null $photo Optional. Available sizes of the chat photo, if the photo was requested by the bot
    */
    public function __construct
    (
         private int $userId,
         private ?string $firstName = null,
         private ?string $lastName = null,
         private ?string $username = null,
         private ?array $photo = null
    ) {}
    
    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
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
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * @return PhotoSize[]|null
     */
    public function getPhoto(): ?array
    {
        return $this->photo;
    }
}
