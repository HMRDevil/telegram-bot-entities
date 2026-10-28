<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a clickable area on a story media.
 *
 * @see https://core.telegram.org/bots/api#storyarea
 */
final class StoryArea
{
    /**
     * @param StoryAreaPosition $position Position of the area
     * @param StoryAreaType $type Type of the area
    */
    public function __construct
    (
         private StoryAreaPosition $position,
         private StoryAreaType $type
    ) {}
    
    /**
     * @return StoryAreaPosition
     */
    public function getPosition(): StoryAreaPosition
    {
        return $this->position;
    }

    /**
     * @return StoryAreaType
     */
    public function getType(): StoryAreaType
    {
        return $this->type;
    }
}
