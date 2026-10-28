<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a service message about the chat owner leaving the chat.
 *
 * @see https://core.telegram.org/bots/api#chatownerleft
 */
final class ChatOwnerLeft
{
    /**
     * @param User|null $newOwner Optional. The user who will become the new owner of the chat if the previous owner does not return to the chat
    */
    public function __construct
    (
         private ?User $newOwner = null
    ) {}
    
    /**
     * @return User|null
     */
    public function getNewOwner(): ?User
    {
        return $this->newOwner;
    }
}
