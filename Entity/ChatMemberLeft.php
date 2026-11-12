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
     * @var string $status The member's status in the chat, always “left”
     */
    private string $status = 'left';

    /**
     * @param User $user Information about the user
    */
    public function __construct
    (
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
