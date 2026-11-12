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
     * @var string $type Type of the reaction, always “paid”
     */
    private string $type = 'paid';
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}
