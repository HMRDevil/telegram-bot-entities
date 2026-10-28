<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Contains parameters of a post that is being suggested by the bot.
 *
 * @see https://core.telegram.org/bots/api#suggestedpostparameters
 */
final class SuggestedPostParameters
{
    /**
     * @param SuggestedPostPrice|null $price Optional. Proposed price for the post. If the field is omitted, then the post is unpaid.
     * @param int|null $sendDate Optional. Proposed send date of the post. If specified, then the date must be between 300 second and 2678400 seconds (30 days) in the future. If the field is omitted, then the post can be published at any time within 30 days at the sole discretion of the user who approves it.
    */
    public function __construct
    (
         private ?SuggestedPostPrice $price = null,
         private ?int $sendDate = null
    ) {}
    
    /**
     * @return SuggestedPostPrice|null
     */
    public function getPrice(): ?SuggestedPostPrice
    {
        return $this->price;
    }

    /**
     * @return int|null
     */
    public function getSendDate(): ?int
    {
        return $this->sendDate;
    }
}
