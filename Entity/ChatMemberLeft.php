<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Represents a chat member that isn't currently a member of the chat, but may join it themselves.
 *
 * @see https://core.telegram.org/bots/api#chatmemberleft
 */
final class ChatMemberLeft
{
    /**
     * @param string $status The member's status in the chat, always "left"
     * @param User $user Information about the user
    */
    public function __construct
    (
         private string $status,
         private User $user
    ) {}
    
    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }
}
