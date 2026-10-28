<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Represents a reaction added to a message along with the number of times it was added.
 *
 * @see https://core.telegram.org/bots/api#reactioncount
 */
final class ReactionCount
{
    /**
     * @param ReactionType $type Type of the reaction
     * @param int $totalCount Number of times the reaction was added
    */
    public function __construct
    (
         private ReactionType $type,
         private int $totalCount
    ) {}
    
    /**
     * @return ReactionType
     */
    public function getType(): ReactionType
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }
}
