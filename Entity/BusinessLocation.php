<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Contains information about the location of a Telegram Business account.
 *
 * @see https://core.telegram.org/bots/api#businesslocation
 */
final class BusinessLocation
{
    /**
     * @param string $address Address of the business
     * @param Location|null $location Optional. Location of the business
    */
    public function __construct
    (
         private string $address,
         private ?Location $location = null
    ) {}
    
    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return Location|null
     */
    public function getLocation(): ?Location
    {
        return $this->location;
    }
}
