<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * The reaction is paid.
 *
 * @see https://core.telegram.org/bots/api#reactiontypepaid
 */
final class ReactionTypePaid
{
    /**
     * @param string $type Type of the reaction, always "paid"
    */
    public function __construct
    (
         private string $type
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}
