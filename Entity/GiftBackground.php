<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object describes the background of a gift.
 *
 * @see https://core.telegram.org/bots/api#giftbackground
 */
final class GiftBackground
{
    /**
     * @param int $centerColor Center color of the background in RGB format
     * @param int $edgeColor Edge color of the background in RGB format
     * @param int $textColor Text color of the background in RGB format
    */
    public function __construct
    (
         private int $centerColor,
         private int $edgeColor,
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
    public function getTextColor(): int
    {
        return $this->textColor;
    }
}
