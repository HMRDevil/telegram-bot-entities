<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object describes the model of a unique gift.
 *
 * @see https://core.telegram.org/bots/api#uniquegiftmodel
 */
final class UniqueGiftModel
{
    /**
     * @param string $name Name of the model
     * @param Sticker $sticker The sticker that represents the unique gift
     * @param int $rarityPerMille The number of unique gifts that receive this model for every 1000 gift upgrades. Always 0 for crafted gifts.
     * @param string|null $rarity Optional. Rarity of the model if it is a crafted model. Currently, can be "uncommon", "rare", "epic", or "legendary".
    */
    public function __construct
    (
         private string $name,
         private Sticker $sticker,
         private int $rarityPerMille,
         private ?string $rarity = null
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

    /**
     * @return string|null
     */
    public function getRarity(): ?string
    {
        return $this->rarity;
    }
}
