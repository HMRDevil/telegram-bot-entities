<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object contains information about the bot that was created to be managed by the current bot.
 *
 * @see https://core.telegram.org/bots/api#managedbotcreated
 */
final class ManagedBotCreated
{
    /**
     * @param User $bot Information about the bot. The bot's token can be fetched using the method getManagedBotToken.
    */
    public function __construct
    (
         private User $bot
    ) {}
    
    /**
     * @return User
     */
    public function getBot(): User
    {
        return $this->bot;
    }
}
