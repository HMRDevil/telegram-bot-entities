<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes the price of a suggested post.
 *
 * @see https://core.telegram.org/bots/api#suggestedpostprice
 */
final class SuggestedPostPrice
{
    /**
     * @param string $currency Currency in which the post will be paid. Currently, must be one of "XTR" for Telegram Stars or "TON" for TON grams.
     * @param int $amount The amount of the currency that will be paid for the post in the smallest units of the currency, i.e. Telegram Stars or nanograms. Currently, price in Telegram Stars must be between 5 and 100000, and price in nanograms must be between 10000000 and 10000000000000.
    */
    public function __construct
    (
         private string $currency,
         private int $amount
    ) {}
    
    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }
}
