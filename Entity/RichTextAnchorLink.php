<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A link to an anchor.
 *
 * @see https://core.telegram.org/bots/api#richtextanchorlink
 */
final class RichTextAnchorLink
{
    /**
     * @var string $type Type of the rich text, always “anchor_link”
     */
    private string $type = 'anchor_link';

    /**
     * @param RichText $text The link text
     * @param string $anchorName The name of the anchor. If the name is empty, then the link brings back to the top of the message.
    */
    public function __construct
    (
         private RichText $text,
         private string $anchorName
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
    public function getAnchorName(): string
    {
        return $this->anchorName;
    }
}
