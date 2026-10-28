<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes an interval of time during which a business is open.
 *
 * @see https://core.telegram.org/bots/api#businessopeninghoursinterval
 */
final class BusinessOpeningHoursInterval
{
    /**
     * @param int $openingMinute The minute's sequence number in a week, starting on Monday, marking the start of the time interval during which the business is open; 0 - 7 * 24 * 60
     * @param int $closingMinute The minute's sequence number in a week, starting on Monday, marking the end of the time interval during which the business is open; 0 - 8 * 24 * 60
    */
    public function __construct
    (
         private int $openingMinute,
         private int $closingMinute
    ) {}
    
    /**
     * @return int
     */
    public function getOpeningMinute(): int
    {
        return $this->openingMinute;
    }

    /**
     * @return int
     */
    public function getClosingMinute(): int
    {
        return $this->closingMinute;
    }
}
