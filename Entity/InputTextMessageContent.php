<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Represents the content of a text message to be sent as the result of an inline query.
 *
 * @see https://core.telegram.org/bots/api#inputtextmessagecontent
 */
final class InputTextMessageContent
{
    /**
     * @param string $messageText Text of the message to be sent, 1-4096 characters
     * @param string|null $parseMode Optional. Mode for parsing entities in the message text. See formatting options for more details.
     * @param MessageEntity[]|null $entities Optional. List of special entities that appear in message text, which can be specified instead of parse_mode
     * @param LinkPreviewOptions|null $linkPreviewOptions Optional. Link preview generation options for the message
    */
    public function __construct
    (
         private string $messageText,
         private ?string $parseMode = null,
         private ?array $entities = null,
         private ?LinkPreviewOptions $linkPreviewOptions = null
    ) {}
    
    /**
     * @return string
     */
    public function getMessageText(): string
    {
        return $this->messageText;
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
    public function getEntities(): ?array
    {
        return $this->entities;
    }

    /**
     * @return LinkPreviewOptions|null
     */
    public function getLinkPreviewOptions(): ?LinkPreviewOptions
    {
        return $this->linkPreviewOptions;
    }
}
