<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Represents the scope of bot commands, covering a specific chat.
 *
 * @see https://core.telegram.org/bots/api#botcommandscopechat
 */
final class BotCommandScopeChat
{
    /**
     * @param string $type Scope type, must be chat
     * @param int|string $chatId Unique identifier for the target chat or username of the target supergroup in the format @username. Channel direct messages chats and channel chats aren't supported.
    */
    public function __construct
    (
         private string $type,
         private int|string $chatId
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return int|string
     */
    public function getChatId(): int|string
    {
        return $this->chatId;
    }
}
