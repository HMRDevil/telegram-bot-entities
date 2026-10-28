<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents a service message about a video chat ended in the chat.
 *
 * @see https://core.telegram.org/bots/api#videochatended
 */
final class VideoChatEnded
{
    /**
     * @param int $duration Video chat duration in seconds
    */
    public function __construct
    (
         private int $duration
    ) {}
    
    /**
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }
}
