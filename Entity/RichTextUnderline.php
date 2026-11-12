<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * An underlined text.
 *
 * @see https://core.telegram.org/bots/api#richtextunderline
 */
final class RichTextUnderline
{
    /**
     * @var string $type Type of the rich text, always “underline”
     */
    private string $type = 'underline';

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
