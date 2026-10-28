<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents the bot's short description.
 *
 * @see https://core.telegram.org/bots/api#botshortdescription
 */
final class BotShortDescription
{
    /**
     * @param string $shortDescription The bot's short description
    */
    public function __construct
    (
         private string $shortDescription
    ) {}
    
    /**
     * @return string
     */
    public function getShortDescription(): string
    {
        return $this->shortDescription;
    }
}
