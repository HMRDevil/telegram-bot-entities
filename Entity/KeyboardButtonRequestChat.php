<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object defines the criteria used to request a suitable chat. Information about the selected chat will be shared with the bot when the corresponding button is pressed. The bot will be granted requested rights in the chat if appropriate. More about requesting chats: https://core.telegram.org/bots/features#chat-and-user-selection.
 *
 * @see https://core.telegram.org/bots/api#keyboardbuttonrequestchat
 */
final class KeyboardButtonRequestChat
{
    /**
     * @param int $requestId Signed 32-bit identifier of the request, which will be received back in the ChatShared object. Must be unique within the message.
     * @param bool $chatIsChannel Pass True to request a channel chat, pass False to request a group or a supergroup chat
     * @param bool|null $chatIsForum Optional. Pass True to request a forum supergroup, pass False to request a non-forum chat. If not specified, no additional restrictions are applied.
     * @param bool|null $chatHasUsername Optional. Pass True to request a supergroup or a channel with a username, pass False to request a chat without a username. If not specified, no additional restrictions are applied.
     * @param bool|null $chatIsCreated Optional. Pass True to request a chat owned by the user. Otherwise, no additional restrictions are applied.
     * @param ChatAdministratorRights|null $userAdministratorRights Optional. A JSON-serialized object listing the required administrator rights of the user in the chat. The rights must be a superset of bot_administrator_rights. If not specified, no additional restrictions are applied.
     * @param ChatAdministratorRights|null $botAdministratorRights Optional. A JSON-serialized object listing the required administrator rights of the bot in the chat. The rights must be a subset of user_administrator_rights. If not specified, no additional restrictions are applied.
     * @param bool|null $botIsMember Optional. Pass True to request a chat with the bot as a member. Otherwise, no additional restrictions are applied.
     * @param bool|null $requestTitle Optional. Pass True to request the chat's title
     * @param bool|null $requestUsername Optional. Pass True to request the chat's username
     * @param bool|null $requestPhoto Optional. Pass True to request the chat's photo
    */
    public function __construct
    (
         private int $requestId,
         private bool $chatIsChannel,
         private ?bool $chatIsForum = null,
         private ?bool $chatHasUsername = null,
         private ?bool $chatIsCreated = null,
         private ?ChatAdministratorRights $userAdministratorRights = null,
         private ?ChatAdministratorRights $botAdministratorRights = null,
         private ?bool $botIsMember = null,
         private ?bool $requestTitle = null,
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
     * @return bool
     */
    public function getChatIsChannel(): bool
    {
        return $this->chatIsChannel;
    }

    /**
     * @return bool|null
     */
    public function getChatIsForum(): ?bool
    {
        return $this->chatIsForum;
    }

    /**
     * @return bool|null
     */
    public function getChatHasUsername(): ?bool
    {
        return $this->chatHasUsername;
    }

    /**
     * @return bool|null
     */
    public function getChatIsCreated(): ?bool
    {
        return $this->chatIsCreated;
    }

    /**
     * @return ChatAdministratorRights|null
     */
    public function getUserAdministratorRights(): ?ChatAdministratorRights
    {
        return $this->userAdministratorRights;
    }

    /**
     * @return ChatAdministratorRights|null
     */
    public function getBotAdministratorRights(): ?ChatAdministratorRights
    {
        return $this->botAdministratorRights;
    }

    /**
     * @return bool|null
     */
    public function getBotIsMember(): ?bool
    {
        return $this->botIsMember;
    }

    /**
     * @return bool|null
     */
    public function getRequestTitle(): ?bool
    {
        return $this->requestTitle;
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
