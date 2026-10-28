<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object contains information about the creation, token update, or owner update of a bot that is managed by the current bot.
 *
 * @see https://core.telegram.org/bots/api#managedbotupdated
 */
final class ManagedBotUpdated
{
    /**
     * @param User $user User that created the bot
     * @param User $bot Information about the bot. Token of the bot can be fetched using the method getManagedBotToken.
    */
    public function __construct
    (
         private User $user,
         private User $bot
    ) {}
    
    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @return User
     */
    public function getBot(): User
    {
        return $this->bot;
    }
}
