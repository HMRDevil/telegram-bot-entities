<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Represents a menu button, which opens the bot's list of commands.
 *
 * @see https://core.telegram.org/bots/api#menubuttoncommands
 */
final class MenuButtonCommands
{
    /**
     * @var string $type Type of the button, must be commands
     */
    private string $type = 'commands';

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}
