<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object describes the symbol shown on the pattern of a unique gift.
 *
 * @see https://core.telegram.org/bots/api#uniquegiftsymbol
 */
final class UniqueGiftSymbol
{
    /**
     * @param string $name Name of the symbol
     * @param Sticker $sticker The sticker that represents the unique gift
     * @param int $rarityPerMille The number of unique gifts that receive this model for every 1000 gifts upgraded
    */
    public function __construct
    (
         private string $name,
         private Sticker $sticker,
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
     * @return Sticker
     */
    public function getSticker(): Sticker
    {
        return $this->sticker;
    }

    /**
     * @return int
     */
    public function getRarityPerMille(): int
    {
        return $this->rarityPerMille;
    }
}
