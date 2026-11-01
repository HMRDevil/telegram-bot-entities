<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a service message about a successful payment for a suggested post.
 *
 * @see https://core.telegram.org/bots/api#suggestedpostpaid
 */
final class SuggestedPostPaid
{
    /**
     * @param string $currency Currency in which the payment was made. Currently, one of "XTR" for Telegram Stars or "TON" for TON grams.
     * @param Message|null $suggestedPostMessage Optional. Message containing the suggested post. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
     * @param int|null $amount Optional. The amount of the currency that was received by the channel in nanograms; for payments in TON grams only
     * @param StarAmount|null $starAmount Optional. The amount of Telegram Stars that was received by the channel; for payments in Telegram Stars only
    */
    public function __construct
    (
         private string $currency,
         private ?Message $suggestedPostMessage = null,
         private ?int $amount = null,
         private ?StarAmount $starAmount = null
    ) {}
    
    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @return Message|null
     */
    public function getSuggestedPostMessage(): ?Message
    {
        return $this->suggestedPostMessage;
    }

    /**
     * @return int|null
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * @return StarAmount|null
     */
    public function getStarAmount(): ?StarAmount
    {
        return $this->starAmount;
    }
}
