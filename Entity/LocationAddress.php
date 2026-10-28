<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes the physical address of a location.
 *
 * @see https://core.telegram.org/bots/api#locationaddress
 */
final class LocationAddress
{
    /**
     * @param string $countryCode The two-letter ISO 3166-1 alpha-2 country code of the country where the location is located
     * @param string|null $state Optional. State of the location
     * @param string|null $city Optional. City of the location
     * @param string|null $street Optional. Street address of the location
    */
    public function __construct
    (
         private string $countryCode,
         private ?string $state = null,
         private ?string $city = null,
         private ?string $street = null
    ) {}
    
    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }
}
