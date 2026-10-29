<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A block with a map, corresponding to the custom HTML tag <tg-map>.
 *
 * @see https://core.telegram.org/bots/api#richblockmap
 */
final class RichBlockMap
{
    /**
     * @param string $type Type of the block, always "map"
     * @param Location $location Location of the center of the map
     * @param int $zoom Map zoom level; 13-20
     * @param int $width Expected width of the map
     * @param int $height Expected height of the map
     * @param RichBlockCaption|null $caption Optional. Caption of the block
    */
    public function __construct
    (
         private string $type,
         private Location $location,
         private int $zoom,
         private int $width,
         private int $height,
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
     * @return int
     */
    public function getZoom(): int
    {
        return $this->zoom;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @return int
     */
    public function getHeight(): int
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
