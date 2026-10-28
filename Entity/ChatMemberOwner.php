<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Represents a chat member that owns the chat and has all administrator privileges.
 *
 * @see https://core.telegram.org/bots/api#chatmemberowner
 */
final class ChatMemberOwner
{
    /**
     * @param string $status The member's status in the chat, always "creator"
     * @param User $user Information about the user
     * @param bool $isAnonymous True, if the user's presence in the chat is hidden
     * @param string|null $customTitle Optional. Custom title for this user
    */
    public function __construct
    (
         private string $status,
         private User $user,
         private bool $isAnonymous,
         private ?string $customTitle = null
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

    /**
     * @return bool
     */
    public function getIsAnonymous(): bool
    {
        return $this->isAnonymous;
    }

    /**
     * @return string|null
     */
    public function getCustomTitle(): ?string
    {
        return $this->customTitle;
    }
}
