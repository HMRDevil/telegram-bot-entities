<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A strikethrough text.
 *
 * @see https://core.telegram.org/bots/api#richtextstrikethrough
 */
final class RichTextStrikethrough
{
    /**
     * @var string $type Type of the rich text, always “strikethrough”
     */
    private string $type = 'strikethrough';

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
