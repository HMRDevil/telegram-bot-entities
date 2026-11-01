<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * An anchor.
 *
 * @see https://core.telegram.org/bots/api#richtextanchor
 */
final class RichTextAnchor
{
    /**
     * @param string $type Type of the rich text, always "anchor"
     * @param string $name The name of the anchor
    */
    public function __construct
    (
         private string $type,
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
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
