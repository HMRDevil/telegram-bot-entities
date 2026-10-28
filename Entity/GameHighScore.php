<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents one row of the high scores table for a game.
 *
 * @see https://core.telegram.org/bots/api#gamehighscore
 */
final class GameHighScore
{
    /**
     * @param int $position Position in high score table for the game
     * @param User $user User
     * @param int $score Score
    */
    public function __construct
    (
         private int $position,
         private User $user,
         private int $score
    ) {}
    
    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @return int
     */
    public function getScore(): int
    {
        return $this->score;
    }
}
