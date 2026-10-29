<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Represents a live photo to be sent.
 *
 * @see https://core.telegram.org/bots/api#inputmedialivephoto
 */
final class InputMediaLivePhoto
{
    /**
     * @param string $type Type of the media, must be live_photo
     * @param string $media Video of the live photo to send. Pass a file_id to send a file that exists on the Telegram servers (recommended) or pass "attach://<file_attach_name>" to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files: https://core.telegram.org/bots/api#sending-files. Sending live photos by a URL is currently unsupported.
     * @param string $photo The static photo to send. Pass a file_id to send a file that exists on the Telegram servers (recommended) or pass "attach://<file_attach_name>" to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files: https://core.telegram.org/bots/api#sending-files. Sending live photos by a URL is currently unsupported.
     * @param string|null $caption Optional. Caption of the live photo to be sent, 0-1024 characters after entities parsing
     * @param string|null $parseMode Optional. Mode for parsing entities in the live photo caption. See formatting options for more details.
     * @param MessageEntity[]|null $captionEntities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param bool|null $showCaptionAboveMedia Optional. Pass True, if the caption must be shown above the message media
     * @param bool|null $hasSpoiler Optional. Pass True if the live photo needs to be covered with a spoiler animation
    */
    public function __construct
    (
         private string $type,
         private string $media,
         private string $photo,
         private ?string $caption = null,
         private ?string $parseMode = null,
         private ?array $captionEntities = null,
         private ?bool $showCaptionAboveMedia = null,
         private ?bool $hasSpoiler = null
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
     * @return string
     */
    public function getPhoto(): string
    {
        return $this->photo;
    }

    /**
     * @return string|null
     */
    public function getCaption(): ?string
    {
        return $this->caption;
    }

    /**
     * @return string|null
     */
    public function getParseMode(): ?string
    {
        return $this->parseMode;
    }

    /**
     * @return MessageEntity[]|null
     */
    public function getCaptionEntities(): ?array
    {
        return $this->captionEntities;
    }

    /**
     * @return bool|null
     */
    public function getShowCaptionAboveMedia(): ?bool
    {
        return $this->showCaptionAboveMedia;
    }

    /**
     * @return bool|null
     */
    public function getHasSpoiler(): ?bool
    {
        return $this->hasSpoiler;
    }
}
