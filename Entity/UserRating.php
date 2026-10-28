<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object describes the rating of a user based on their Telegram Star spendings.
 *
 * @see https://core.telegram.org/bots/api#userrating
 */
final class UserRating
{
    /**
     * @param int $level Current level of the user, indicating their reliability when purchasing digital goods and services. A higher level suggests a more trustworthy customer; a negative level is likely reason for concern.
     * @param int $rating Numerical value of the user's rating; the higher the rating, the better
     * @param int $currentLevelRating The rating value required to get the current level
     * @param int|null $nextLevelRating Optional. The rating value required to get to the next level; omitted if the maximum level was reached
    */
    public function __construct
    (
         private int $level,
         private int $rating,
         private int $currentLevelRating,
         private ?int $nextLevelRating = null
    ) {}
    
    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * @return int
     */
    public function getRating(): int
    {
        return $this->rating;
    }

    /**
     * @return int
     */
    public function getCurrentLevelRating(): int
    {
        return $this->currentLevelRating;
    }

    /**
     * @return int|null
     */
    public function getNextLevelRating(): ?int
    {
        return $this->nextLevelRating;
    }
}
