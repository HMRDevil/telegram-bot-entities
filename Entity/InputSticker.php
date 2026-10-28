<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object describes a sticker to be added to a sticker set.
 *
 * @see https://core.telegram.org/bots/api#inputsticker
 */
final class InputSticker
{
    /**
     * @param string $sticker The added sticker. Pass a file_id as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or pass "attach://<file_attach_name>" to upload a new file using multipart/form-data under <file_attach_name> name. Animated and video stickers can't be uploaded via HTTP URL. More information on Sending Files: https://core.telegram.org/bots/api#sending-files
     * @param string $format Format of the added sticker, must be one of "static" for a .WEBP or .PNG image, "animated" for a .TGS animation, "video" for a .WEBM video
     * @param String[] $emojiList List of 1-20 emoji associated with the sticker
     * @param MaskPosition|null $maskPosition Optional. Position where the mask should be placed on faces. For "mask" stickers only.
     * @param String[]|null $keywords Optional. List of 0-20 search keywords for the sticker with total length of up to 64 characters. For "regular" and "custom_emoji" stickers only.
    */
    public function __construct
    (
         private string $sticker,
         private string $format,
         private array $emojiList,
         private ?MaskPosition $maskPosition = null,
         private ?array $keywords = null
    ) {}
    
    /**
     * @return string
     */
    public function getSticker(): string
    {
        return $this->sticker;
    }

    /**
     * @return string
     */
    public function getFormat(): string
    {
        return $this->format;
    }

    /**
     * @return String[]
     */
    public function getEmojiList(): array
    {
        return $this->emojiList;
    }

    /**
     * @return MaskPosition|null
     */
    public function getMaskPosition(): ?MaskPosition
    {
        return $this->maskPosition;
    }

    /**
     * @return String[]|null
     */
    public function getKeywords(): ?array
    {
        return $this->keywords;
    }
}
