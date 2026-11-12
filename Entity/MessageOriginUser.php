<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * The message was originally sent by a known user.
 *
 * @see https://core.telegram.org/bots/api#messageoriginuser
 */
final class MessageOriginUser
{
    /**
     * @var string $type Type of the message origin, always “user”
     */
    private string $type = 'user';

    /**
     * @param int $date Date the message was sent originally in Unix time
     * @param User $senderUser User that sent the message originally
    */
    public function __construct
    (
         private int $date,
         private User $senderUser
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * @return User
     */
    public function getSenderUser(): User
    {
        return $this->senderUser;
    }
}
