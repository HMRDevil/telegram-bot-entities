<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * The background is a gradient fill.
 *
 * @see https://core.telegram.org/bots/api#backgroundfillgradient
 */
final class BackgroundFillGradient
{
    /**
     * @param string $type Type of the background fill, always "gradient"
     * @param int $topColor Top color of the gradient in the RGB24 format
     * @param int $bottomColor Bottom color of the gradient in the RGB24 format
     * @param int $rotationAngle Clockwise rotation angle of the background fill in degrees; 0-359
    */
    public function __construct
    (
         private string $type,
         private int $topColor,
         private int $bottomColor,
         private int $rotationAngle
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
    public function getTopColor(): int
    {
        return $this->topColor;
    }

    /**
     * @return int
     */
    public function getBottomColor(): int
    {
        return $this->bottomColor;
    }

    /**
     * @return int
     */
    public function getRotationAngle(): int
    {
        return $this->rotationAngle;
    }
}
