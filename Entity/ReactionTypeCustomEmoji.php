<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * The reaction is based on a custom emoji.
 *
 * @see https://core.telegram.org/bots/api#reactiontypecustomemoji
 */
final class ReactionTypeCustomEmoji
{
    /**
     * @param string $type Type of the reaction, always "custom_emoji"
     * @param string $customEmojiId Custom emoji identifier
    */
    public function __construct
    (
         private string $type,
         private string $customEmojiId
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
}
