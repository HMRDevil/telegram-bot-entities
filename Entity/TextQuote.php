<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object contains information about the quoted part of a message that is replied to by the given message.
 *
 * @see https://core.telegram.org/bots/api#textquote
 */
final class TextQuote
{
    /**
     * @param string $text Text of the quoted part of a message that is replied to by the given message
     * @param int $position Approximate quote position in the original message in UTF-16 code units as specified by the sender
     * @param MessageEntity[]|null $entities Optional. Special entities that appear in the quote. Currently, only bold, italic, underline, strikethrough, spoiler, custom_emoji, and date_time entities are kept in quotes.
     * @param bool|null $isManual Optional. True, if the quote was chosen manually by the message sender. Otherwise, the quote was added automatically by the server.
    */
    public function __construct
    (
         private string $text,
         private int $position,
         private ?array $entities = null,
         private ?bool $isManual = null
    ) {}
    
    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * @return MessageEntity[]|null
     */
    public function getEntities(): ?array
    {
        return $this->entities;
    }

    /**
     * @return bool|null
     */
    public function getIsManual(): ?bool
    {
        return $this->isManual;
    }
}
