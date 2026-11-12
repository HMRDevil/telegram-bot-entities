<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A mention by a username.
 *
 * @see https://core.telegram.org/bots/api#richtextmention
 */
final class RichTextMention
{
    /**
     * @var string $type Type of the rich text, always “mention”
     */
    private string $type = 'mention';

    /**
     * @param RichText $text The text
     * @param string $username The username
    */
    public function __construct
    (
         private RichText $text,
         private string $username
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
    public function getUsername(): string
    {
        return $this->username;
    }
}
