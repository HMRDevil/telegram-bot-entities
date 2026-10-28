<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Represents a link to an MP3 audio file. By default, this audio file will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the audio.
 *
 * @see https://core.telegram.org/bots/api#inlinequeryresultaudio
 */
final class InlineQueryResultAudio
{
    /**
     * @param string $type Type of the result, must be audio
     * @param string $id Unique identifier for this result, 1-64 bytes
     * @param string $audioUrl A valid URL for the audio file
     * @param string $title Title
     * @param string|null $caption Optional. Caption, 0-1024 characters after entities parsing
     * @param string|null $parseMode Optional. Mode for parsing entities in the audio caption. See formatting options for more details.
     * @param MessageEntity[]|null $captionEntities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param string|null $performer Optional. Performer
     * @param int|null $audioDuration Optional. Audio duration in seconds
     * @param InlineKeyboardMarkup|null $replyMarkup Optional. Inline keyboard attached to the message
     * @param InputMessageContent|null $inputMessageContent Optional. Content of the message to be sent instead of the audio
    */
    public function __construct
    (
         private string $type,
         private string $id,
         private string $audioUrl,
         private string $title,
         private ?string $caption = null,
         private ?string $parseMode = null,
         private ?array $captionEntities = null,
         private ?string $performer = null,
         private ?int $audioDuration = null,
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
    public function getAudioUrl(): string
    {
        return $this->audioUrl;
    }

    /**
     * @return string
     */
    public function getTitle(): string
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
     * @return string|null
     */
    public function getPerformer(): ?string
    {
        return $this->performer;
    }

    /**
     * @return int|null
     */
    public function getAudioDuration(): ?int
    {
        return $this->audioDuration;
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
