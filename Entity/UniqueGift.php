<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object describes a unique gift that was upgraded from a regular gift.
 *
 * @see https://core.telegram.org/bots/api#uniquegift
 */
final class UniqueGift
{
    /**
     * @param string $giftId Identifier of the regular gift from which the gift was upgraded
     * @param string $baseName Human-readable name of the regular gift from which this unique gift was upgraded
     * @param string $name Unique name of the gift. This name can be used in https://t.me/nft/... links and story areas.
     * @param int $number Unique number of the upgraded gift among gifts upgraded from the same regular gift
     * @param UniqueGiftModel $model Model of the gift
     * @param UniqueGiftSymbol $symbol Symbol of the gift
     * @param UniqueGiftBackdrop $backdrop Backdrop of the gift
     * @param bool|null $isPremium Optional. True, if the original regular gift was exclusively purchaseable by Telegram Premium subscribers
     * @param bool|null $isBurned Optional. True, if the gift was used to craft another gift and isn't available anymore
     * @param bool|null $isFromBlockchain Optional. True, if the gift is assigned from the TON blockchain and can't be resold or transferred in Telegram
     * @param UniqueGiftColors|null $colors Optional. The color scheme that can be used by the gift's owner for the chat's name, replies to messages and link previews; for business account gifts and gifts that are currently on sale only
     * @param Chat|null $publisherChat Optional. Information about the chat that published the gift
    */
    public function __construct
    (
         private string $giftId,
         private string $baseName,
         private string $name,
         private int $number,
         private UniqueGiftModel $model,
         private UniqueGiftSymbol $symbol,
         private UniqueGiftBackdrop $backdrop,
         private ?bool $isPremium = null,
         private ?bool $isBurned = null,
         private ?bool $isFromBlockchain = null,
         private ?UniqueGiftColors $colors = null,
         private ?Chat $publisherChat = null
    ) {}
    
    /**
     * @return string
     */
    public function getGiftId(): string
    {
        return $this->giftId;
    }

    /**
     * @return string
     */
    public function getBaseName(): string
    {
        return $this->baseName;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @return UniqueGiftModel
     */
    public function getModel(): UniqueGiftModel
    {
        return $this->model;
    }

    /**
     * @return UniqueGiftSymbol
     */
    public function getSymbol(): UniqueGiftSymbol
    {
        return $this->symbol;
    }

    /**
     * @return UniqueGiftBackdrop
     */
    public function getBackdrop(): UniqueGiftBackdrop
    {
        return $this->backdrop;
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
    public function getIsBurned(): ?bool
    {
        return $this->isBurned;
    }

    /**
     * @return bool|null
     */
    public function getIsFromBlockchain(): ?bool
    {
        return $this->isFromBlockchain;
    }

    /**
     * @return UniqueGiftColors|null
     */
    public function getColors(): ?UniqueGiftColors
    {
        return $this->colors;
    }

    /**
     * @return Chat|null
     */
    public function getPublisherChat(): ?Chat
    {
        return $this->publisherChat;
    }
}
