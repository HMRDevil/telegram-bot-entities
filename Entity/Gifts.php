<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represent a list of gifts.
 *
 * @see https://core.telegram.org/bots/api#gifts
 */
final class Gifts
{
    /**
     * @param Gift[] $gifts The list of gifts
    */
    public function __construct
    (
         private array $gifts
    ) {}
    
    /**
     * @return Gift[]
     */
    public function getGifts(): array
    {
        return $this->gifts;
    }
}
