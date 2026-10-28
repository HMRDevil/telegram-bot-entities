<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents a service message about a change in auto-delete timer settings.
 *
 * @see https://core.telegram.org/bots/api#messageautodeletetimerchanged
 */
final class MessageAutoDeleteTimerChanged
{
    /**
     * @param int $messageAutoDeleteTime New auto-delete time for messages in the chat; in seconds
    */
    public function __construct
    (
         private int $messageAutoDeleteTime
    ) {}
    
    /**
     * @return int
     */
    public function getMessageAutoDeleteTime(): int
    {
        return $this->messageAutoDeleteTime;
    }
}
