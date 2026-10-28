<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents an inline button that switches the current user to inline mode in a chosen chat, with an optional default inline query.
 *
 * @see https://core.telegram.org/bots/api#switchinlinequerychosenchat
 */
final class SwitchInlineQueryChosenChat
{
    /**
     * @param string|null $query Optional. The default inline query to be inserted in the input field. If left empty, only the bot's username will be inserted.
     * @param bool|null $allowUserChats Optional. True, if private chats with users can be chosen
     * @param bool|null $allowBotChats Optional. True, if private chats with bots can be chosen
     * @param bool|null $allowGroupChats Optional. True, if group and supergroup chats can be chosen
     * @param bool|null $allowChannelChats Optional. True, if channel chats can be chosen
    */
    public function __construct
    (
         private ?string $query = null,
         private ?bool $allowUserChats = null,
         private ?bool $allowBotChats = null,
         private ?bool $allowGroupChats = null,
         private ?bool $allowChannelChats = null
    ) {}
    
    /**
     * @return string|null
     */
    public function getQuery(): ?string
    {
        return $this->query;
    }

    /**
     * @return bool|null
     */
    public function getAllowUserChats(): ?bool
    {
        return $this->allowUserChats;
    }

    /**
     * @return bool|null
     */
    public function getAllowBotChats(): ?bool
    {
        return $this->allowBotChats;
    }

    /**
     * @return bool|null
     */
    public function getAllowGroupChats(): ?bool
    {
        return $this->allowGroupChats;
    }

    /**
     * @return bool|null
     */
    public function getAllowChannelChats(): ?bool
    {
        return $this->allowChannelChats;
    }
}
