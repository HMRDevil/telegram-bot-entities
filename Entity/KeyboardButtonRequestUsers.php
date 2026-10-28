<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object defines the criteria used to request suitable users. Information about the selected users will be shared with the bot when the corresponding button is pressed. More about requesting users: https://core.telegram.org/bots/features#chat-and-user-selection
 *
 * @see https://core.telegram.org/bots/api#keyboardbuttonrequestusers
 */
final class KeyboardButtonRequestUsers
{
    /**
     * @param int $requestId Signed 32-bit identifier of the request that will be received back in the UsersShared object. Must be unique within the message.
     * @param bool|null $userIsBot Optional. Pass True to request bots, pass False to request regular users. If not specified, no additional restrictions are applied.
     * @param bool|null $userIsPremium Optional. Pass True to request premium users, pass False to request non-premium users. If not specified, no additional restrictions are applied.
     * @param int|null $maxQuantity Optional. The maximum number of users to be selected; 1-10. Defaults to 1.
     * @param bool|null $requestName Optional. Pass True to request the users' first and last names
     * @param bool|null $requestUsername Optional. Pass True to request the users' usernames
     * @param bool|null $requestPhoto Optional. Pass True to request the users' photos
    */
    public function __construct
    (
         private int $requestId,
         private ?bool $userIsBot = null,
         private ?bool $userIsPremium = null,
         private ?int $maxQuantity = null,
         private ?bool $requestName = null,
         private ?bool $requestUsername = null,
         private ?bool $requestPhoto = null
    ) {}
    
    /**
     * @return int
     */
    public function getRequestId(): int
    {
        return $this->requestId;
    }

    /**
     * @return bool|null
     */
    public function getUserIsBot(): ?bool
    {
        return $this->userIsBot;
    }

    /**
     * @return bool|null
     */
    public function getUserIsPremium(): ?bool
    {
        return $this->userIsPremium;
    }

    /**
     * @return int|null
     */
    public function getMaxQuantity(): ?int
    {
        return $this->maxQuantity;
    }

    /**
     * @return bool|null
     */
    public function getRequestName(): ?bool
    {
        return $this->requestName;
    }

    /**
     * @return bool|null
     */
    public function getRequestUsername(): ?bool
    {
        return $this->requestUsername;
    }

    /**
     * @return bool|null
     */
    public function getRequestPhoto(): ?bool
    {
        return $this->requestPhoto;
    }
}
