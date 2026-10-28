<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a service message about a change in the price of paid messages within a chat.
 *
 * @see https://core.telegram.org/bots/api#paidmessagepricechanged
 */
final class PaidMessagePriceChanged
{
    /**
     * @param int $paidMessageStarCount The new number of Telegram Stars that must be paid by non-administrator users of the supergroup chat for each sent message
    */
    public function __construct
    (
         private int $paidMessageStarCount
    ) {}
    
    /**
     * @return int
     */
    public function getPaidMessageStarCount(): int
    {
        return $this->paidMessageStarCount;
    }
}
