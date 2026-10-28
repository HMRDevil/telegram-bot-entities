<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents a gift that can be sent by the bot.
 *
 * @see https://core.telegram.org/bots/api#gift
 */
final class Gift
{
    /**
     * @param string $id Unique identifier of the gift
     * @param Sticker $sticker The sticker that represents the gift
     * @param int $starCount The number of Telegram Stars that must be paid to send the sticker
     * @param int|null $upgradeStarCount Optional. The number of Telegram Stars that must be paid to upgrade the gift to a unique one
     * @param bool|null $isPremium Optional. True, if the gift can only be purchased by Telegram Premium subscribers
     * @param bool|null $hasColors Optional. True, if the gift can be used (after being upgraded) to customize a user's appearance
     * @param int|null $totalCount Optional. The total number of gifts of this type that can be sent by all users; for limited gifts only
     * @param int|null $remainingCount Optional. The number of remaining gifts of this type that can be sent by all users; for limited gifts only
     * @param int|null $personalTotalCount Optional. The total number of gifts of this type that can be sent by the bot; for limited gifts only
     * @param int|null $personalRemainingCount Optional. The number of remaining gifts of this type that can be sent by the bot; for limited gifts only
     * @param GiftBackground|null $background Optional. Background of the gift
     * @param int|null $uniqueGiftVariantCount Optional. The total number of different unique gifts that can be obtained by upgrading the gift
     * @param Chat|null $publisherChat Optional. Information about the chat that published the gift
    */
    public function __construct
    (
         private string $id,
         private Sticker $sticker,
         private int $starCount,
         private ?int $upgradeStarCount = null,
         private ?bool $isPremium = null,
         private ?bool $hasColors = null,
         private ?int $totalCount = null,
         private ?int $remainingCount = null,
         private ?int $personalTotalCount = null,
         private ?int $personalRemainingCount = null,
         private ?GiftBackground $background = null,
         private ?int $uniqueGiftVariantCount = null,
         private ?Chat $publisherChat = null
    ) {}
    
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return Sticker
     */
    public function getSticker(): Sticker
    {
        return $this->sticker;
    }

    /**
     * @return int
     */
    public function getStarCount(): int
    {
        return $this->starCount;
    }

    /**
     * @return int|null
     */
    public function getUpgradeStarCount(): ?int
    {
        return $this->upgradeStarCount;
    }

    /**
     * @return bool|null
     */
    public function getIsPremium(): ?bool
    {
        return $this->isPremium;
    }

    /**
     * @return bool|null
     */
    public function getHasColors(): ?bool
    {
        return $this->hasColors;
    }

    /**
     * @return int|null
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    /**
     * @return int|null
     */
    public function getRemainingCount(): ?int
    {
        return $this->remainingCount;
    }

    /**
     * @return int|null
     */
    public function getPersonalTotalCount(): ?int
    {
        return $this->personalTotalCount;
    }

    /**
     * @return int|null
     */
    public function getPersonalRemainingCount(): ?int
    {
        return $this->personalRemainingCount;
    }

    /**
     * @return GiftBackground|null
     */
    public function getBackground(): ?GiftBackground
    {
        return $this->background;
    }

    /**
     * @return int|null
     */
    public function getUniqueGiftVariantCount(): ?int
    {
        return $this->uniqueGiftVariantCount;
    }

    /**
     * @return Chat|null
     */
    public function getPublisherChat(): ?Chat
    {
        return $this->publisherChat;
    }
}
