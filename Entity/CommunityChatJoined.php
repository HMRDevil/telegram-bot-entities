<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a service message about a chat being joined by a user from a community.
 *
 * @see https://core.telegram.org/bots/api#communitychatjoined
 */
final class CommunityChatJoined
{
    /**
     * @param Community $community The community from which the chat was joined
    */
    public function __construct
    (
         private Community $community
    ) {}
    
    /**
     * @return Community
     */
    public function getCommunity(): Community
    {
        return $this->community;
    }
}
