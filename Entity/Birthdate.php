<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes the birthdate of a user.
 *
 * @see https://core.telegram.org/bots/api#birthdate
 */
final class Birthdate
{
    /**
     * @param int $day Day of the user's birth; 1-31
     * @param int $month Month of the user's birth; 1-12
     * @param int|null $year Optional. Year of the user's birth
    */
    public function __construct
    (
         private int $day,
         private int $month,
         private ?int $year = null
    ) {}
    
    /**
     * @return int
     */
    public function getDay(): int
    {
        return $this->day;
    }

    /**
     * @return int
     */
    public function getMonth(): int
    {
        return $this->month;
    }

    /**
     * @return int|null
     */
    public function getYear(): ?int
    {
        return $this->year;
    }
}
