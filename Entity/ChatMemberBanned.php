<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Represents a chat member that was banned in the chat and can't return to the chat or view chat messages.
 *
 * @see https://core.telegram.org/bots/api#chatmemberbanned
 */
final class ChatMemberBanned
{
    /**
     * @param string $status The member's status in the chat, always "kicked"
     * @param User $user Information about the user
     * @param int $untilDate Date when restrictions will be lifted for this user; Unix time. If 0, then the user is banned forever.
    */
    public function __construct
    (
         private string $status,
         private User $user,
         private int $untilDate
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
     * @return int
     */
    public function getUntilDate(): int
    {
        return $this->untilDate;
    }
}
