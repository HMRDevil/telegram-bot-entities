<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A custom emoji.
 *
 * @see https://core.telegram.org/bots/api#richtextcustomemoji
 */
final class RichTextCustomEmoji
{
    /**
     * @param string $type Type of the rich text, always "custom_emoji"
     * @param string $customEmojiId Unique identifier of the custom emoji. Use getCustomEmojiStickers to get full information about the sticker.
     * @param string $alternativeText Alternative emoji for the custom emoji
    */
    public function __construct
    (
         private string $type,
         private string $customEmojiId,
         private string $alternativeText
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
    public function getCustomEmojiId(): string
    {
        return $this->customEmojiId;
    }

    /**
     * @return string
     */
    public function getAlternativeText(): string
    {
        return $this->alternativeText;
    }
}
