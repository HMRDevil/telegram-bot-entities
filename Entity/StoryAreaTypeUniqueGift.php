<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a story area pointing to a unique gift. Currently, a story can have at most 1 unique gift area.
 *
 * @see https://core.telegram.org/bots/api#storyareatypeuniquegift
 */
final class StoryAreaTypeUniqueGift
{
    /**
     * @param string $type Type of the area, always "unique_gift"
     * @param string $name Unique name of the gift
    */
    public function __construct
    (
         private string $type,
         private string $name
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
    public function getName(): string
    {
        return $this->name;
    }
}
