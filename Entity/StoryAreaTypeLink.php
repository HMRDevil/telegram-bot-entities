<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a story area pointing to an HTTP or tg:// link. Currently, a story can have up to 3 link areas.
 *
 * @see https://core.telegram.org/bots/api#storyareatypelink
 */
final class StoryAreaTypeLink
{
    /**
     * @var string $type Type of the area, always “link”
     */
    private string $type = 'link';

    /**
     * @param string $url HTTP or tg:// URL to be opened when the area is clicked
    */
    public function __construct
    (
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
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
}
