<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes an amount of Telegram Stars.
 *
 * @see https://core.telegram.org/bots/api#staramount
 */
final class StarAmount
{
    /**
     * @param int $amount Integer amount of Telegram Stars, rounded to 0; can be negative
     * @param int|null $nanostarAmount Optional. The number of 1/1000000000 shares of Telegram Stars; from -999999999 to 999999999; can be negative if and only if amount is non-positive
    */
    public function __construct
    (
         private int $amount,
         private ?int $nanostarAmount = null
    ) {}
    
    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @return int|null
     */
    public function getNanostarAmount(): ?int
    {
        return $this->nanostarAmount;
    }
}
