<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a service message about a regular gift that was sent or received.
 *
 * @see https://core.telegram.org/bots/api#giftinfo
 */
final class GiftInfo
{
    /**
     * @param Gift $gift Information about the gift
     * @param string|null $ownedGiftId Optional. Unique identifier of the received gift for the bot; only present for gifts received on behalf of business accounts
     * @param int|null $convertStarCount Optional. Number of Telegram Stars that can be claimed by the receiver by converting the gift; omitted if conversion to Telegram Stars is impossible
     * @param int|null $prepaidUpgradeStarCount Optional. Number of Telegram Stars that were prepaid for the ability to upgrade the gift
     * @param bool|null $isUpgradeSeparate Optional. True, if the gift's upgrade was purchased after the gift was sent
     * @param bool|null $canBeUpgraded Optional. True, if the gift can be upgraded to a unique gift
     * @param string|null $text Optional. Text of the message that was added to the gift
     * @param MessageEntity[]|null $entities Optional. Special entities that appear in the text
     * @param bool|null $isPrivate Optional. True, if the sender and gift text are shown only to the gift receiver; otherwise, everyone will be able to see them
     * @param int|null $uniqueGiftNumber Optional. Unique number reserved for this gift when upgraded. See the number field in UniqueGift.
    */
    public function __construct
    (
         private Gift $gift,
         private ?string $ownedGiftId = null,
         private ?int $convertStarCount = null,
         private ?int $prepaidUpgradeStarCount = null,
         private ?bool $isUpgradeSeparate = null,
         private ?bool $canBeUpgraded = null,
         private ?string $text = null,
         private ?array $entities = null,
         private ?bool $isPrivate = null,
         private ?int $uniqueGiftNumber = null
    ) {}
    
    /**
     * @return Gift
     */
    public function getGift(): Gift
    {
        return $this->gift;
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
     * @return bool|null
     */
    public function getCanBeUpgraded(): ?bool
    {
        return $this->canBeUpgraded;
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
     * @return int|null
     */
    public function getUniqueGiftNumber(): ?int
    {
        return $this->uniqueGiftNumber;
    }
}
