<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Represents a link to a sticker stored on the Telegram servers. By default, this sticker will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the sticker.
 *
 * @see https://core.telegram.org/bots/api#inlinequeryresultcachedsticker
 */
final class InlineQueryResultCachedSticker
{
    /**
     * @param string $type Type of the result, must be sticker
     * @param string $id Unique identifier for this result, 1-64 bytes
     * @param string $stickerFileId A valid file identifier of the sticker
     * @param InlineKeyboardMarkup|null $replyMarkup Optional. Inline keyboard attached to the message
     * @param InputMessageContent|null $inputMessageContent Optional. Content of the message to be sent instead of the sticker
    */
    public function __construct
    (
         private string $type,
         private string $id,
         private string $stickerFileId,
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
    public function getStickerFileId(): string
    {
        return $this->stickerFileId;
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
