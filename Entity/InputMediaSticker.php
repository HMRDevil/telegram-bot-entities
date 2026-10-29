<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Represents a sticker file to be sent.
 *
 * @see https://core.telegram.org/bots/api#inputmediasticker
 */
final class InputMediaSticker
{
    /**
     * @param string $type Type of the media, must be sticker
     * @param string $media File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a .WEBP sticker from the Internet, or pass "attach://<file_attach_name>" to upload a new .WEBP, .TGS, or .WEBM sticker using multipart/form-data under <file_attach_name> name. More information on Sending Files: https://core.telegram.org/bots/api#sending-files
     * @param string|null $emoji Optional. Emoji associated with the sticker; only for just uploaded stickers
    */
    public function __construct
    (
         private string $type,
         private string $media,
         private ?string $emoji = null
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getMedia(): string
    {
        return $this->media;
    }

    /**
     * @return string|null
     */
    public function getEmoji(): ?string
    {
        return $this->emoji;
    }
}
