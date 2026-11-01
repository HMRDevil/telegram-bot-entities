<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a service message about a chat being added to a community.
 *
 * @see https://core.telegram.org/bots/api#communitychatadded
 */
final class CommunityChatAdded
{
    /**
     * @param Community $community The new community to which the chat belongs
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
