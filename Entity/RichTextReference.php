<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A reference.
 *
 * @see https://core.telegram.org/bots/api#richtextreference
 */
final class RichTextReference
{
    /**
     * @param string $type Type of the rich text, always "reference"
     * @param RichText $text Text of the reference
     * @param string $name The name of the reference
    */
    public function __construct
    (
         private string $type,
         private RichText $text,
         private string $name
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

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
