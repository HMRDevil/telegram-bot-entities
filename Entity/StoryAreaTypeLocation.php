<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a story area pointing to a location. Currently, a story can have up to 10 location areas.
 *
 * @see https://core.telegram.org/bots/api#storyareatypelocation
 */
final class StoryAreaTypeLocation
{
    /**
     * @param string $type Type of the area, always "location"
     * @param float $latitude Location latitude in degrees
     * @param float $longitude Location longitude in degrees
     * @param LocationAddress|null $address Optional. Address of the location
    */
    public function __construct
    (
         private string $type,
         private float $latitude,
         private float $longitude,
         private ?LocationAddress $address = null
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * @return LocationAddress|null
     */
    public function getAddress(): ?LocationAddress
    {
        return $this->address;
    }
}
