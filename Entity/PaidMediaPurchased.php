<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object contains information about a paid media purchase.
 *
 * @see https://core.telegram.org/bots/api#paidmediapurchased
 */
final class PaidMediaPurchased
{
    /**
     * @param User $from User who purchased the media
     * @param string $paidMediaPayload Bot-specified paid media payload
    */
    public function __construct
    (
         private User $from,
         private string $paidMediaPayload
    ) {}
    
    /**
     * @return User
     */
    public function getFrom(): User
    {
        return $this->from;
    }

    /**
     * @return string
     */
    public function getPaidMediaPayload(): string
    {
        return $this->paidMediaPayload;
    }
}
