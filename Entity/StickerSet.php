<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents a sticker set.
 *
 * @see https://core.telegram.org/bots/api#stickerset
 */
final class StickerSet
{
    /**
     * @param string $name Sticker set name
     * @param string $title Sticker set title
     * @param string $stickerType Type of stickers in the set, currently one of "regular", "mask", "custom_emoji"
     * @param Sticker[] $stickers List of all set stickers
     * @param PhotoSize|null $thumbnail Optional. Sticker set thumbnail in the .WEBP, .TGS, or .WEBM format
    */
    public function __construct
    (
         private string $name,
         private string $title,
         private string $stickerType,
         private array $stickers,
         private ?PhotoSize $thumbnail = null
    ) {}
    
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getStickerType(): string
    {
        return $this->stickerType;
    }

    /**
     * @return Sticker[]
     */
    public function getStickers(): array
    {
        return $this->stickers;
    }

    /**
     * @return PhotoSize|null
     */
    public function getThumbnail(): ?PhotoSize
    {
        return $this->thumbnail;
    }
}
