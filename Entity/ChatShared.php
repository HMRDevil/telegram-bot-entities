<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object contains information about a chat that was shared with the bot using a KeyboardButtonRequestChat button.
 *
 * @see https://core.telegram.org/bots/api#chatshared
 */
final class ChatShared
{
    /**
     * @param int $requestId Identifier of the request
     * @param int $chatId Identifier of the shared chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. The bot may not have access to the chat and could be unable to use this identifier, unless the chat is already known to the bot by some other means.
     * @param string|null $title Optional. Title of the chat, if the title was requested by the bot
     * @param string|null $username Optional. Username of the chat, if the username was requested by the bot and available
     * @param PhotoSize[]|null $photo Optional. Available sizes of the chat photo, if the photo was requested by the bot
    */
    public function __construct
    (
         private int $requestId,
         private int $chatId,
         private ?string $title = null,
         private ?string $username = null,
         private ?array $photo = null
    ) {}
    
    /**
     * @return int
     */
    public function getRequestId(): int
    {
        return $this->requestId;
    }

    /**
     * @return int
     */
    public function getChatId(): int
    {
        return $this->chatId;
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
     * @return PhotoSize[]|null
     */
    public function getPhoto(): ?array
    {
        return $this->photo;
    }
}
