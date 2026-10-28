<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a unique gift received and owned by a user or a chat.
 *
 * @see https://core.telegram.org/bots/api#ownedgiftunique
 */
final class OwnedGiftUnique
{
    /**
     * @param string $type Type of the gift, always "unique"
     * @param UniqueGift $gift Information about the unique gift
     * @param int $sendDate Date the gift was sent in Unix time
     * @param string|null $ownedGiftId Optional. Unique identifier of the received gift for the bot; for gifts received on behalf of business accounts only
     * @param User|null $senderUser Optional. Sender of the gift if it is a known user
     * @param bool|null $isSaved Optional. True, if the gift is displayed on the account's profile page; for gifts received on behalf of business accounts only
     * @param bool|null $canBeTransferred Optional. True, if the gift can be transferred to another owner; for gifts received on behalf of business accounts only
     * @param int|null $transferStarCount Optional. Number of Telegram Stars that must be paid to transfer the gift; omitted if the bot cannot transfer the gift
     * @param int|null $nextTransferDate Optional. Point in time (Unix timestamp) when the gift can be transferred. If it is in the past, then the gift can be transferred now.
    */
    public function __construct
    (
         private string $type,
         private UniqueGift $gift,
         private int $sendDate,
         private ?string $ownedGiftId = null,
         private ?User $senderUser = null,
         private ?bool $isSaved = null,
         private ?bool $canBeTransferred = null,
         private ?int $transferStarCount = null,
         private ?int $nextTransferDate = null
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return UniqueGift
     */
    public function getGift(): UniqueGift
    {
        return $this->gift;
    }

    /**
     * @return int
     */
    public function getSendDate(): int
    {
        return $this->sendDate;
    }

    /**
     * @return string|null
     */
    public function getOwnedGiftId(): ?string
    {
        return $this->ownedGiftId;
    }

    /**
     * @return User|null
     */
    public function getSenderUser(): ?User
    {
        return $this->senderUser;
    }

    /**
     * @return bool|null
     */
    public function getIsSaved(): ?bool
    {
        return $this->isSaved;
    }

    /**
     * @return bool|null
     */
    public function getCanBeTransferred(): ?bool
    {
        return $this->canBeTransferred;
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
