<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents the bot's description.
 *
 * @see https://core.telegram.org/bots/api#botdescription
 */
final class BotDescription
{
    /**
     * @param string $description The bot's description
    */
    public function __construct
    (
         private string $description
    ) {}
    
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
}
