<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A text with a link.
 *
 * @see https://core.telegram.org/bots/api#richtexturl
 */
final class RichTextUrl
{
    /**
     * @param string $type Type of the rich text, always "url"
     * @param RichText $text The text
     * @param string $url URL of the link
    */
    public function __construct
    (
         private string $type,
         private RichText $text,
         private string $url
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
    public function getUrl(): string
    {
        return $this->url;
    }
}
