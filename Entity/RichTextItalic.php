<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * An italicized text.
 *
 * @see https://core.telegram.org/bots/api#richtextitalic
 */
final class RichTextItalic
{
    /**
     * @var string $type Type of the rich text, always “italic”
     */
    private string $type = 'italic';

    /**
     * @param RichText $text The text
    */
    public function __construct
    (
         private RichText $text
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return RichText
     */
    public function getText(): RichText
    {
        return $this->text;
    }
}
