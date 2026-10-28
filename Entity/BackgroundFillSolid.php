<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * The background is filled using the selected color.
 *
 * @see https://core.telegram.org/bots/api#backgroundfillsolid
 */
final class BackgroundFillSolid
{
    /**
     * @param string $type Type of the background fill, always "solid"
     * @param int $color The color of the background fill in the RGB24 format
    */
    public function __construct
    (
         private string $type,
         private int $color
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getColor(): int
    {
        return $this->color;
    }
}
