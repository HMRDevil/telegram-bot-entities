<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Represents the default scope of bot commands. Default commands are used if no commands with a narrower scope are specified for the user.
 *
 * @see https://core.telegram.org/bots/api#botcommandscopedefault
 */
final class BotCommandScopeDefault
{
    /**
     * @var string $type Scope type, must be default
     */
    private string $type = 'default';

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}
