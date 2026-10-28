<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes the opening hours of a business.
 *
 * @see https://core.telegram.org/bots/api#businessopeninghours
 */
final class BusinessOpeningHours
{
    /**
     * @param string $timeZoneName Unique name of the time zone for which the opening hours are defined
     * @param BusinessOpeningHoursInterval[] $openingHours List of time intervals describing business opening hours
    */
    public function __construct
    (
         private string $timeZoneName,
         private array $openingHours
    ) {}
    
    /**
     * @return string
     */
    public function getTimeZoneName(): string
    {
        return $this->timeZoneName;
    }

    /**
     * @return BusinessOpeningHoursInterval[]
     */
    public function getOpeningHours(): array
    {
        return $this->openingHours;
    }
}
