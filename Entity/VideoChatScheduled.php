<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents a service message about a video chat scheduled in the chat.
 *
 * @see https://core.telegram.org/bots/api#videochatscheduled
 */
final class VideoChatScheduled
{
    /**
     * @param int $startDate Point in time (Unix timestamp) when the video chat is supposed to be started by a chat administrator
    */
    public function __construct
    (
         private int $startDate
    ) {}
    
    /**
     * @return int
     */
    public function getStartDate(): int
    {
        return $this->startDate;
    }
}
