<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A marked text.
 *
 * @see https://core.telegram.org/bots/api#richtextmarked
 */
final class RichTextMarked
{
    /**
     * @var string $type Type of the rich text, always “marked”
     */
    private string $type = 'marked';

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
