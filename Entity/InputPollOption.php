<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object contains information about one answer option in a poll to be sent.
 *
 * @see https://core.telegram.org/bots/api#inputpolloption
 */
final class InputPollOption
{
    /**
     * @param string $text Option text, 1-100 characters
     * @param string|null $textParseMode Optional. Mode for parsing entities in the text. See formatting options for more details. Currently, only custom emoji entities are allowed.
     * @param MessageEntity[]|null $textEntities Optional. A JSON-serialized list of special entities that appear in the poll option text. It can be specified instead of text_parse_mode.
     * @param InputPollOptionMedia|null $media Optional. Media added to the poll option
    */
    public function __construct
    (
         private string $text,
         private ?string $textParseMode = null,
         private ?array $textEntities = null,
         private ?InputPollOptionMedia $media = null
    ) {}
    
    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return string|null
     */
    public function getTextParseMode(): ?string
    {
        return $this->textParseMode;
    }

    /**
     * @return MessageEntity[]|null
     */
    public function getTextEntities(): ?array
    {
        return $this->textEntities;
    }

    /**
     * @return InputPollOptionMedia|null
     */
    public function getMedia(): ?InputPollOptionMedia
    {
        return $this->media;
    }
}
