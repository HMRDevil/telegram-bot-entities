<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object describes the access settings of a bot.
 *
 * @see https://core.telegram.org/bots/api#botaccesssettings
 */
final class BotAccessSettings
{
    /**
     * @param bool $isAccessRestricted True, if only selected users can access the bot. The bot's owner can always access it.
     * @param User[]|null $addedUsers Optional. The list of other users who have access to the bot if the access is restricted
    */
    public function __construct
    (
         private bool $isAccessRestricted,
         private ?array $addedUsers = null
    ) {}
    
    /**
     * @return bool
     */
    public function getIsAccessRestricted(): bool
    {
        return $this->isAccessRestricted;
    }

    /**
     * @return User[]|null
     */
    public function getAddedUsers(): ?array
    {
        return $this->addedUsers;
    }
}
