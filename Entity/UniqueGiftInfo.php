<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a service message about a unique gift that was sent or received.
 *
 * @see https://core.telegram.org/bots/api#uniquegiftinfo
 */
final class UniqueGiftInfo
{
    /**
     * @param UniqueGift $gift Information about the gift
     * @param string $origin Origin of the gift. Currently, either "upgrade" for gifts upgraded from regular gifts, "transfer" for gifts transferred from other users or channels, "resale" for gifts bought from other users, "gifted_upgrade" for upgrades purchased after the gift was sent, or "offer" for gifts bought or sold through gift purchase offers.
     * @param string|null $lastResaleCurrency Optional. For gifts bought from other users, the currency in which the payment for the gift was done. Currently, one of "XTR" for Telegram Stars or "TON" for TON grams.
     * @param int|null $lastResaleAmount Optional. For gifts bought from other users, the price paid for the gift in either Telegram Stars or nanograms
     * @param string|null $ownedGiftId Optional. Unique identifier of the received gift for the bot; only present for gifts received on behalf of business accounts
     * @param int|null $transferStarCount Optional. Number of Telegram Stars that must be paid to transfer the gift; omitted if the bot cannot transfer the gift
     * @param int|null $nextTransferDate Optional. Point in time (Unix timestamp) when the gift can be transferred. If it is in the past, then the gift can be transferred now.
    */
    public function __construct
    (
         private UniqueGift $gift,
         private string $origin,
         private ?string $lastResaleCurrency = null,
         private ?int $lastResaleAmount = null,
         private ?string $ownedGiftId = null,
         private ?int $transferStarCount = null,
         private ?int $nextTransferDate = null
    ) {}
    
    /**
     * @return UniqueGift
     */
    public function getGift(): UniqueGift
    {
        return $this->gift;
    }

    /**
     * @return string
     */
    public function getOrigin(): string
    {
        return $this->origin;
    }

    /**
     * @return string|null
     */
    public function getLastResaleCurrency(): ?string
    {
        return $this->lastResaleCurrency;
    }

    /**
     * @return int|null
     */
    public function getLastResaleAmount(): ?int
    {
        return $this->lastResaleAmount;
    }

    /**
     * @return string|null
     */
    public function getOwnedGiftId(): ?string
    {
        return $this->ownedGiftId;
    }

    /**
     * @return int|null
     */
    public function getTransferStarCount(): ?int
    {
        return $this->transferStarCount;
    }

    /**
     * @return int|null
     */
    public function getNextTransferDate(): ?int
    {
        return $this->nextTransferDate;
    }
}
