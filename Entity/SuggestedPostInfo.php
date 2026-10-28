<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Contains information about a suggested post.
 *
 * @see https://core.telegram.org/bots/api#suggestedpostinfo
 */
final class SuggestedPostInfo
{
    /**
     * @param string $state State of the suggested post. Currently, it can be one of "pending", "approved", "declined".
     * @param SuggestedPostPrice|null $price Optional. Proposed price of the post. If the field is omitted, then the post is unpaid.
     * @param int|null $sendDate Optional. Proposed send date of the post. If the field is omitted, then the post can be published at any time within 30 days at the sole discretion of the user or administrator who approves it.
    */
    public function __construct
    (
         private string $state,
         private ?SuggestedPostPrice $price = null,
         private ?int $sendDate = null
    ) {}
    
    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

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
