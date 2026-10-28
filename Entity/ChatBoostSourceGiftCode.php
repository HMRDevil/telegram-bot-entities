<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * The boost was obtained by the creation of Telegram Premium gift codes to boost a chat. Each such code boosts the chat 4 times for the duration of the corresponding Telegram Premium subscription.
 *
 * @see https://core.telegram.org/bots/api#chatboostsourcegiftcode
 */
final class ChatBoostSourceGiftCode
{
    /**
     * @param string $source Source of the boost, always "gift_code"
     * @param User $user User for which the gift code was created
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
