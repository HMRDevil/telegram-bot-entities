<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A link to a reference.
 *
 * @see https://core.telegram.org/bots/api#richtextreferencelink
 */
final class RichTextReferenceLink
{
    /**
     * @param string $type Type of the rich text, always "reference_link"
     * @param RichText $text The link text
     * @param string $referenceName The name of the reference
    */
    public function __construct
    (
         private string $type,
         private RichText $text,
         private string $referenceName
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
    public function getReferenceName(): string
    {
        return $this->referenceName;
    }
}
