<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * The boost was obtained by subscribing to Telegram Premium or by gifting a Telegram Premium subscription to another user.
 *
 * @see https://core.telegram.org/bots/api#chatboostsourcepremium
 */
final class ChatBoostSourcePremium
{
    /**
     * @param string $source Source of the boost, always "premium"
     * @param User $user User that boosted the chat
    */
    public function __construct
    (
         private string $source,
         private User $user
    ) {}
    
    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }
}
