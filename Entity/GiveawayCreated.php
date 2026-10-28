<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents a service message about the creation of a scheduled giveaway.
 *
 * @see https://core.telegram.org/bots/api#giveawaycreated
 */
final class GiveawayCreated
{
    /**
     * @param int|null $prizeStarCount Optional. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only
    */
    public function __construct
    (
         private ?int $prizeStarCount = null
    ) {}
    
    /**
     * @return int|null
     */
    public function getPrizeStarCount(): ?int
    {
        return $this->prizeStarCount;
    }
}
