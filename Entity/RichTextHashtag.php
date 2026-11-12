<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A hashtag.
 *
 * @see https://core.telegram.org/bots/api#richtexthashtag
 */
final class RichTextHashtag
{
    /**
     * @var string $type Type of the rich text, always “hashtag”
     */
    private string $type = 'hashtag';

    /**
     * @param RichText $text The text
     * @param string $hashtag The hashtag
    */
    public function __construct
    (
         private RichText $text,
         private string $hashtag
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
    public function getHashtag(): string
    {
        return $this->hashtag;
    }
}
