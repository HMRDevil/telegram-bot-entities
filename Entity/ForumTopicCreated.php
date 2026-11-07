<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents a service message about a new forum topic created in the chat.
 *
 * @see https://core.telegram.org/bots/api#forumtopiccreated
 */
final class ForumTopicCreated
{
    /**
     * @param string $name Name of the topic
     * @param int $iconColor Color of the topic icon in RGB format
     * @param string|null $iconCustomEmojiId Optional. Unique identifier of the custom emoji shown as the topic icon
     * @param true|null $isNameImplicit Optional. True, if the name of the topic wasn't specified explicitly by its creator and likely needs to be changed by the bot
    */
    public function __construct
    (
         private string $name,
         private int $iconColor,
         private ?string $iconCustomEmojiId = null,
         private ?true $isNameImplicit = null
    ) {}
    
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
