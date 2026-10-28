<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents a service message about new members invited to a video chat.
 *
 * @see https://core.telegram.org/bots/api#videochatparticipantsinvited
 */
final class VideoChatParticipantsInvited
{
    /**
     * @param User[] $users New members that were invited to the video chat
    */
    public function __construct
    (
         private array $users
    ) {}
    
    /**
     * @return User[]
     */
    public function getUsers(): array
    {
        return $this->users;
    }
}
