<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A bold text.
 *
 * @see https://core.telegram.org/bots/api#richtextbold
 */
final class RichTextBold
{
    /**
     * @param string $type Type of the rich text, always "bold"
     * @param RichText $text The text
    */
    public function __construct
    (
         private string $type,
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
