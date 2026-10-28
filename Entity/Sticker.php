<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents a sticker.
 *
 * @see https://core.telegram.org/bots/api#sticker
 */
final class Sticker
{
    /**
     * @param string $fileId Identifier for this file, which can be used to download or reuse the file
     * @param string $fileUniqueId Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @param string $type Type of the sticker, currently one of "regular", "mask", "custom_emoji". The type of the sticker is independent from its format, which is determined by the fields is_animated and is_video.
     * @param int $width Sticker width
     * @param int $height Sticker height
     * @param bool $isAnimated True, if the sticker is animated
     * @param bool $isVideo True, if the sticker is a video sticker
     * @param PhotoSize|null $thumbnail Optional. Sticker thumbnail in the .WEBP or .JPG format
     * @param string|null $emoji Optional. Emoji associated with the sticker
     * @param string|null $setName Optional. Name of the sticker set to which the sticker belongs
     * @param File|null $premiumAnimation Optional. For premium regular stickers, premium animation for the sticker
     * @param MaskPosition|null $maskPosition Optional. For mask stickers, the position where the mask should be placed
     * @param string|null $customEmojiId Optional. For custom emoji stickers, unique identifier of the custom emoji
     * @param bool|null $needsRepainting Optional. True, if the sticker must be repainted to a text color in messages, the color of the Telegram Premium badge in emoji status, white color on chat photos, or another appropriate color in other places
     * @param int|null $fileSize Optional. File size in bytes
    */
    public function __construct
    (
         private string $fileId,
         private string $fileUniqueId,
         private string $type,
         private int $width,
         private int $height,
         private bool $isAnimated,
         private bool $isVideo,
         private ?PhotoSize $thumbnail = null,
         private ?string $emoji = null,
         private ?string $setName = null,
         private ?File $premiumAnimation = null,
         private ?MaskPosition $maskPosition = null,
         private ?string $customEmojiId = null,
         private ?bool $needsRepainting = null,
         private ?int $fileSize = null
    ) {}
    
    /**
     * @return string
     */
    public function getFileId(): string
    {
        return $this->fileId;
    }

    /**
     * @return string
     */
    public function getFileUniqueId(): string
    {
        return $this->fileUniqueId;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @return bool
     */
    public function getIsAnimated(): bool
    {
        return $this->isAnimated;
    }

    /**
     * @return bool
     */
    public function getIsVideo(): bool
    {
        return $this->isVideo;
    }

    /**
     * @return PhotoSize|null
     */
    public function getThumbnail(): ?PhotoSize
    {
        return $this->thumbnail;
    }

    /**
     * @return string|null
     */
    public function getEmoji(): ?string
    {
        return $this->emoji;
    }

    /**
     * @return string|null
     */
    public function getSetName(): ?string
    {
        return $this->setName;
    }

    /**
     * @return File|null
     */
    public function getPremiumAnimation(): ?File
    {
        return $this->premiumAnimation;
    }

    /**
     * @return MaskPosition|null
     */
    public function getMaskPosition(): ?MaskPosition
    {
        return $this->maskPosition;
    }

    /**
     * @return string|null
     */
    public function getCustomEmojiId(): ?string
    {
        return $this->customEmojiId;
    }

    /**
     * @return bool|null
     */
    public function getNeedsRepainting(): ?bool
    {
        return $this->needsRepainting;
    }

    /**
     * @return int|null
     */
    public function getFileSize(): ?int
    {
        return $this->fileSize;
    }
}
