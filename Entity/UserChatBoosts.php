<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents a list of boosts added to a chat by a user.
 *
 * @see https://core.telegram.org/bots/api#userchatboosts
 */
final class UserChatBoosts
{
    /**
     * @param ChatBoost[] $boosts The list of boosts added to the chat by the user
    */
    public function __construct
    (
         private array $boosts
    ) {}
    
    /**
     * @return ChatBoost[]
     */
    public function getBoosts(): array
    {
        return $this->boosts;
    }
}
