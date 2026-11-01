<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A block with a map, corresponding to the custom HTML tag <tg-map>. The map's width and height must not exceed 10000 in total. The width and height ratio must be at most 20.
 *
 * @see https://core.telegram.org/bots/api#inputrichblockmap
 */
final class InputRichBlockMap
{
    /**
     * @param string $type Type of the block, always "map"
     * @param Location $location Location of the center of the map
     * @param int|null $zoom Optional. Map zoom level; 0-24
     * @param int|null $width Optional. Map width; 0-10000
     * @param int|null $height Optional. Map height; 0-10000
     * @param RichBlockCaption|null $caption Optional. Caption of the block
    */
    public function __construct
    (
         private string $type,
         private Location $location,
         private ?int $zoom = null,
         private ?int $width = null,
         private ?int $height = null,
         private ?RichBlockCaption $caption = null
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return Location
     */
    public function getLocation(): Location
    {
        return $this->location;
    }

    /**
     * @return int|null
     */
    public function getZoom(): ?int
    {
        return $this->zoom;
    }

    /**
     * @return int|null
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * @return int|null
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * @return RichBlockCaption|null
     */
    public function getCaption(): ?RichBlockCaption
    {
        return $this->caption;
    }
}
