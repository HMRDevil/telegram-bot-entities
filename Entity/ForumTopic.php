<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents a forum topic.
 *
 * @see https://core.telegram.org/bots/api#forumtopic
 */
final class ForumTopic
{
    /**
     * @param int $messageThreadId Unique identifier of the forum topic
     * @param string $name Name of the topic
     * @param int $iconColor Color of the topic icon in RGB format
     * @param string|null $iconCustomEmojiId Optional. Unique identifier of the custom emoji shown as the topic icon
     * @param true|null $isNameImplicit Optional. True, if the name of the topic wasn't specified explicitly by its creator and likely needs to be changed by the bot
    */
    public function __construct
    (
         private int $messageThreadId,
         private string $name,
         private int $iconColor,
         private ?string $iconCustomEmojiId = null,
         private ?true $isNameImplicit = null
    ) {}
    
    /**
     * @return int
     */
    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getIconColor(): int
    {
        return $this->iconColor;
    }

    /**
     * @return string|null
     */
    public function getIconCustomEmojiId(): ?string
    {
        return $this->iconCustomEmojiId;
    }

    /**
     * @return true|null
     */
    public function getIsNameImplicit(): ?true
    {
        return $this->isNameImplicit;
    }
}
