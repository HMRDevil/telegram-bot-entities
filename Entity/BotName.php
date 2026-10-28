<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents the bot's name.
 *
 * @see https://core.telegram.org/bots/api#botname
 */
final class BotName
{
    /**
     * @param string $name The bot's name
    */
    public function __construct
    (
         private string $name
    ) {}
    
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
