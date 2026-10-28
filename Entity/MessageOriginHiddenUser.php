<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * The message was originally sent by an unknown user.
 *
 * @see https://core.telegram.org/bots/api#messageoriginhiddenuser
 */
final class MessageOriginHiddenUser
{
    /**
     * @param string $type Type of the message origin, always "hidden_user"
     * @param int $date Date the message was sent originally in Unix time
     * @param string $senderUserName Name of the user that sent the message originally
    */
    public function __construct
    (
         private string $type,
         private int $date,
         private string $senderUserName
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
     * @return string
     */
    public function getSenderUserName(): string
    {
        return $this->senderUserName;
    }
}
