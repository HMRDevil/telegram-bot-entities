<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Represents a link to an article or web page.
 *
 * @see https://core.telegram.org/bots/api#inlinequeryresultarticle
 */
final class InlineQueryResultArticle
{
    /**
     * @param string $type Type of the result, must be article
     * @param string $id Unique identifier for this result, 1-64 Bytes
     * @param string $title Title of the result
     * @param InputMessageContent $inputMessageContent Content of the message to be sent
     * @param InlineKeyboardMarkup|null $replyMarkup Optional. Inline keyboard attached to the message
     * @param string|null $url Optional. URL of the result
     * @param string|null $description Optional. Short description of the result
     * @param string|null $thumbnailUrl Optional. Url of the thumbnail for the result
     * @param int|null $thumbnailWidth Optional. Thumbnail width
     * @param int|null $thumbnailHeight Optional. Thumbnail height
    */
    public function __construct
    (
         private string $type,
         private string $id,
         private string $title,
         private InputMessageContent $inputMessageContent,
         private ?InlineKeyboardMarkup $replyMarkup = null,
         private ?string $url = null,
         private ?string $description = null,
         private ?string $thumbnailUrl = null,
         private ?int $thumbnailWidth = null,
         private ?int $thumbnailHeight = null
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
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return InputMessageContent
     */
    public function getInputMessageContent(): InputMessageContent
    {
        return $this->inputMessageContent;
    }

    /**
     * @return InlineKeyboardMarkup|null
     */
    public function getReplyMarkup(): ?InlineKeyboardMarkup
    {
        return $this->replyMarkup;
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return string|null
     */
    public function getThumbnailUrl(): ?string
    {
        return $this->thumbnailUrl;
    }

    /**
     * @return int|null
     */
    public function getThumbnailWidth(): ?int
    {
        return $this->thumbnailWidth;
    }

    /**
     * @return int|null
     */
    public function getThumbnailHeight(): ?int
    {
        return $this->thumbnailHeight;
    }
}
