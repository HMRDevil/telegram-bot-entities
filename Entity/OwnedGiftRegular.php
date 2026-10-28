<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a regular gift owned by a user or a chat.
 *
 * @see https://core.telegram.org/bots/api#ownedgiftregular
 */
final class OwnedGiftRegular
{
    /**
     * @param string $type Type of the gift, always "regular"
     * @param Gift $gift Information about the regular gift
     * @param int $sendDate Date the gift was sent in Unix time
     * @param string|null $ownedGiftId Optional. Unique identifier of the gift for the bot; for gifts received on behalf of business accounts only
     * @param User|null $senderUser Optional. Sender of the gift if it is a known user
     * @param string|null $text Optional. Text of the message that was added to the gift
     * @param MessageEntity[]|null $entities Optional. Special entities that appear in the text
     * @param bool|null $isPrivate Optional. True, if the sender and gift text are shown only to the gift receiver; otherwise, everyone will be able to see them
     * @param bool|null $isSaved Optional. True, if the gift is displayed on the account's profile page; for gifts received on behalf of business accounts only
     * @param bool|null $canBeUpgraded Optional. True, if the gift can be upgraded to a unique gift; for gifts received on behalf of business accounts only
     * @param bool|null $wasRefunded Optional. True, if the gift was refunded and isn't available anymore
     * @param int|null $convertStarCount Optional. Number of Telegram Stars that can be claimed by the receiver instead of the gift; omitted if the gift cannot be converted to Telegram Stars; for gifts received on behalf of business accounts only
     * @param int|null $prepaidUpgradeStarCount Optional. Number of Telegram Stars that were paid for the ability to upgrade the gift
     * @param bool|null $isUpgradeSeparate Optional. True, if the gift's upgrade was purchased after the gift was sent; for gifts received on behalf of business accounts only
     * @param int|null $uniqueGiftNumber Optional. Unique number reserved for this gift when upgraded. See the number field in UniqueGift.
    */
    public function __construct
    (
         private string $type,
         private Gift $gift,
         private int $sendDate,
         private ?string $ownedGiftId = null,
         private ?User $senderUser = null,
         private ?string $text = null,
         private ?array $entities = null,
         private ?bool $isPrivate = null,
         private ?bool $isSaved = null,
         private ?bool $canBeUpgraded = null,
         private ?bool $wasRefunded = null,
         private ?int $convertStarCount = null,
         private ?int $prepaidUpgradeStarCount = null,
         private ?bool $isUpgradeSeparate = null,
         private ?int $uniqueGiftNumber = null
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return Gift
     */
    public function getGift(): Gift
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
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @return MessageEntity[]|null
     */
    public function getEntities(): ?array
    {
        return $this->entities;
    }

    /**
     * @return bool|null
     */
    public function getIsPrivate(): ?bool
    {
        return $this->isPrivate;
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
    public function getCanBeUpgraded(): ?bool
    {
        return $this->canBeUpgraded;
    }

    /**
     * @return bool|null
     */
    public function getWasRefunded(): ?bool
    {
        return $this->wasRefunded;
    }

    /**
     * @return int|null
     */
    public function getConvertStarCount(): ?int
    {
        return $this->convertStarCount;
    }

    /**
     * @return int|null
     */
    public function getPrepaidUpgradeStarCount(): ?int
    {
        return $this->prepaidUpgradeStarCount;
    }

    /**
     * @return bool|null
     */
    public function getIsUpgradeSeparate(): ?bool
    {
        return $this->isUpgradeSeparate;
    }

    /**
     * @return int|null
     */
    public function getUniqueGiftNumber(): ?int
    {
        return $this->uniqueGiftNumber;
    }
}
