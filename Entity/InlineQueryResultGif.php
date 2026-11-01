<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Represents a link to an animated GIF file. By default, this animated GIF file will be sent by the user with optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the animation.
 *
 * @see https://core.telegram.org/bots/api#inlinequeryresultgif
 */
final class InlineQueryResultGif
{
    /**
     * @param string $type Type of the result, must be gif
     * @param string $id Unique identifier for this result, 1-64 bytes
     * @param string $gifUrl A valid URL for the GIF file
     * @param string $thumbnailUrl URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result
     * @param int|null $gifWidth Optional. Width of the GIF
     * @param int|null $gifHeight Optional. Height of the GIF
     * @param int|null $gifDuration Optional. Duration of the GIF in seconds
     * @param string|null $thumbnailMimeType Optional. MIME type of the thumbnail, must be one of "image/jpeg", "image/gif", or "video/mp4". Defaults to "image/jpeg".
     * @param string|null $title Optional. Title for the result
     * @param string|null $caption Optional. Caption of the GIF file to be sent, 0-1024 characters after entities parsing
     * @param string|null $parseMode Optional. Mode for parsing entities in the caption. See formatting options for more details.
     * @param MessageEntity[]|null $captionEntities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param bool|null $showCaptionAboveMedia Optional. Pass True if the caption must be shown above the message media
     * @param InlineKeyboardMarkup|null $replyMarkup Optional. Inline keyboard attached to the message
     * @param InputMessageContent|null $inputMessageContent Optional. Content of the message to be sent instead of the GIF animation
    */
    public function __construct
    (
         private string $type,
         private string $id,
         private string $gifUrl,
         private string $thumbnailUrl,
         private ?int $gifWidth = null,
         private ?int $gifHeight = null,
         private ?int $gifDuration = null,
         private ?string $thumbnailMimeType = null,
         private ?string $title = null,
         private ?string $caption = null,
         private ?string $parseMode = null,
         private ?array $captionEntities = null,
         private ?bool $showCaptionAboveMedia = null,
         private ?InlineKeyboardMarkup $replyMarkup = null,
         private ?InputMessageContent $inputMessageContent = null
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
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getGifUrl(): string
    {
        return $this->gifUrl;
    }

    /**
     * @return string
     */
    public function getThumbnailUrl(): string
    {
        return $this->thumbnailUrl;
    }

    /**
     * @return int|null
     */
    public function getGifWidth(): ?int
    {
        return $this->gifWidth;
    }

    /**
     * @return int|null
     */
    public function getGifHeight(): ?int
    {
        return $this->gifHeight;
    }

    /**
     * @return int|null
     */
    public function getGifDuration(): ?int
    {
        return $this->gifDuration;
    }

    /**
     * @return string|null
     */
    public function getThumbnailMimeType(): ?string
    {
        return $this->thumbnailMimeType;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
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
     * @return InlineKeyboardMarkup|null
     */
    public function getReplyMarkup(): ?InlineKeyboardMarkup
    {
        return $this->replyMarkup;
    }

    /**
     * @return InputMessageContent|null
     */
    public function getInputMessageContent(): ?InputMessageContent
    {
        return $this->inputMessageContent;
    }
}
