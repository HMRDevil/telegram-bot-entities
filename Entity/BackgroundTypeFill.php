<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * The background is automatically filled based on the selected colors.
 *
 * @see https://core.telegram.org/bots/api#backgroundtypefill
 */
final class BackgroundTypeFill
{
    /**
     * @param string $type Type of the background, always "fill"
     * @param BackgroundFill $fill The background fill
     * @param int $darkThemeDimming Dimming of the background in dark themes, as a percentage; 0-100
    */
    public function __construct
    (
         private string $type,
         private BackgroundFill $fill,
         private int $darkThemeDimming
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return BackgroundFill
     */
    public function getFill(): BackgroundFill
    {
        return $this->fill;
    }

    /**
     * @return int
     */
    public function getDarkThemeDimming(): int
    {
        return $this->darkThemeDimming;
    }
}
