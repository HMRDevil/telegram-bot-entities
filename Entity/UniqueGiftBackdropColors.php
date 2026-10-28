<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object describes the colors of the backdrop of a unique gift.
 *
 * @see https://core.telegram.org/bots/api#uniquegiftbackdropcolors
 */
final class UniqueGiftBackdropColors
{
    /**
     * @param int $centerColor The color in the center of the backdrop in RGB format
     * @param int $edgeColor The color on the edges of the backdrop in RGB format
     * @param int $symbolColor The color to be applied to the symbol in RGB format
     * @param int $textColor The color for the text on the backdrop in RGB format
    */
    public function __construct
    (
         private int $centerColor,
         private int $edgeColor,
         private int $symbolColor,
         private int $textColor
    ) {}
    
    /**
     * @return int
     */
    public function getCenterColor(): int
    {
        return $this->centerColor;
    }

    /**
     * @return int
     */
    public function getEdgeColor(): int
    {
        return $this->edgeColor;
    }

    /**
     * @return int
     */
    public function getSymbolColor(): int
    {
        return $this->symbolColor;
    }

    /**
     * @return int
     */
    public function getTextColor(): int
    {
        return $this->textColor;
    }
}
