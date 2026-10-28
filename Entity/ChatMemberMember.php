<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Represents a chat member that has no additional privileges or restrictions.
 *
 * @see https://core.telegram.org/bots/api#chatmembermember
 */
final class ChatMemberMember
{
    /**
     * @param string $status The member's status in the chat, always "member"
     * @param User $user Information about the user
     * @param string|null $tag Optional. Tag of the member
     * @param int|null $untilDate Optional. Date when the user's subscription will expire; Unix time
    */
    public function __construct
    (
         private string $status,
         private User $user,
         private ?string $tag = null,
         private ?int $untilDate = null
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
     * @return string|null
     */
    public function getTag(): ?string
    {
        return $this->tag;
    }

    /**
     * @return int|null
     */
    public function getUntilDate(): ?int
    {
        return $this->untilDate;
    }
}
