<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object describes the backdrop of a unique gift.
 *
 * @see https://core.telegram.org/bots/api#uniquegiftbackdrop
 */
final class UniqueGiftBackdrop
{
    /**
     * @param string $name Name of the backdrop
     * @param UniqueGiftBackdropColors $colors Colors of the backdrop
     * @param int $rarityPerMille The number of unique gifts that receive this backdrop for every 1000 gifts upgraded
    */
    public function __construct
    (
         private string $name,
         private UniqueGiftBackdropColors $colors,
         private int $rarityPerMille
    ) {}
    
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return UniqueGiftBackdropColors
     */
    public function getColors(): UniqueGiftBackdropColors
    {
        return $this->colors;
    }

    /**
     * @return int
     */
    public function getRarityPerMille(): int
    {
        return $this->rarityPerMille;
    }
}
