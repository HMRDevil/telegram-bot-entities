<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A mention of a Telegram user by their identifier.
 *
 * @see https://core.telegram.org/bots/api#richtexttextmention
 */
final class RichTextTextMention
{
    /**
     * @var string $type Type of the rich text, always “text_mention”
     */
    private string $type = 'text_mention';

    /**
     * @param RichText $text The text
     * @param User $user The mentioned user
    */
    public function __construct
    (
         private RichText $text,
         private User $user
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
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }
}
