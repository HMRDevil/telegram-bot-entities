<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a service message about an ownership change in the chat.
 *
 * @see https://core.telegram.org/bots/api#chatownerchanged
 */
final class ChatOwnerChanged
{
    /**
     * @param User $newOwner The new owner of the chat
    */
    public function __construct
    (
         private User $newOwner
    ) {}
    
    /**
     * @return User
     */
    public function getNewOwner(): User
    {
        return $this->newOwner;
    }
}
