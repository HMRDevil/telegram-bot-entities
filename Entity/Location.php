<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents a point on the map.
 *
 * @see https://core.telegram.org/bots/api#location
 */
final class Location
{
    /**
     * @param float $latitude Latitude as defined by the sender
     * @param float $longitude Longitude as defined by the sender
     * @param float|null $horizontalAccuracy Optional. The radius of uncertainty for the location, measured in meters; 0-1500
     * @param int|null $livePeriod Optional. Time relative to the message sending date, during which the location can be updated; in seconds. For active live locations only.
     * @param int|null $heading Optional. The direction in which user is moving, in degrees; 1-360. For active live locations only.
     * @param int|null $proximityAlertRadius Optional. The maximum distance for proximity alerts about approaching another chat member, in meters. For sent live locations only.
    */
    public function __construct
    (
         private float $latitude,
         private float $longitude,
         private ?float $horizontalAccuracy = null,
         private ?int $livePeriod = null,
         private ?int $heading = null,
         private ?int $proximityAlertRadius = null
    ) {}
    
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
     * @return float|null
     */
    public function getHorizontalAccuracy(): ?float
    {
        return $this->horizontalAccuracy;
    }

    /**
     * @return int|null
     */
    public function getLivePeriod(): ?int
    {
        return $this->livePeriod;
    }

    /**
     * @return int|null
     */
    public function getHeading(): ?int
    {
        return $this->heading;
    }

    /**
     * @return int|null
     */
    public function getProximityAlertRadius(): ?int
    {
        return $this->proximityAlertRadius;
    }
}
