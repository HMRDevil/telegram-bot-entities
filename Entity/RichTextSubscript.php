<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A subscript text.
 *
 * @see https://core.telegram.org/bots/api#richtextsubscript
 */
final class RichTextSubscript
{
    /**
     * @var string $type Type of the rich text, always “subscript”
     */
    private string $type = 'subscript';

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
