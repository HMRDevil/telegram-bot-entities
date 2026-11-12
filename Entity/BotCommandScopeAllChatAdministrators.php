<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Represents the scope of bot commands, covering all group and supergroup chat administrators.
 *
 * @see https://core.telegram.org/bots/api#botcommandscopeallchatadministrators
 */
final class BotCommandScopeAllChatAdministrators
{
    /**
     * @var string $type Scope type, must be all_chat_administrators
     */
    private string $type = 'all_chat_administrators';

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}
