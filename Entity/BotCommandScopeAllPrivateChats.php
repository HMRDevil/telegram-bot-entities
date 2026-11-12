<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Represents the scope of bot commands, covering all private chats.
 *
 * @see https://core.telegram.org/bots/api#botcommandscopeallprivatechats
 */
final class BotCommandScopeAllPrivateChats
{
    /**
     * @var string $type Scope type, must be all_private_chats
     */
    private string $type = 'all_private_chats';

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}
