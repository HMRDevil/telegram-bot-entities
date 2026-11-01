<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a service message about a change in the price of direct messages sent to a channel chat.
 *
 * @see https://core.telegram.org/bots/api#directmessagepricechanged
 */
final class DirectMessagePriceChanged
{
    /**
     * @param bool $areDirectMessagesEnabled True, if direct messages are enabled for the channel chat; False otherwise
     * @param int|null $directMessageStarCount Optional. The new number of Telegram Stars that must be paid by users for each direct message sent to the channel. Does not apply to users who have been exempted by administrators. Defaults to 0.
    */
    public function __construct
    (
         private bool $areDirectMessagesEnabled,
         private ?int $directMessageStarCount = null
    ) {}
    
    /**
     * @return bool
     */
    public function getAreDirectMessagesEnabled(): bool
    {
        return $this->areDirectMessagesEnabled;
    }

    /**
     * @return int|null
     */
    public function getDirectMessageStarCount(): ?int
    {
        return $this->directMessageStarCount;
    }
}
