<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes the position of a clickable area within a story.
 *
 * @see https://core.telegram.org/bots/api#storyareaposition
 */
final class StoryAreaPosition
{
    /**
     * @param float $xPercentage The abscissa of the area's center, as a percentage of the media width
     * @param float $yPercentage The ordinate of the area's center, as a percentage of the media height
     * @param float $widthPercentage The width of the area's rectangle, as a percentage of the media width
     * @param float $heightPercentage The height of the area's rectangle, as a percentage of the media height
     * @param float $rotationAngle The clockwise rotation angle of the rectangle, in degrees; 0-360
     * @param float $cornerRadiusPercentage The radius of the rectangle corner rounding, as a percentage of the media width
    */
    public function __construct
    (
         private float $xPercentage,
         private float $yPercentage,
         private float $widthPercentage,
         private float $heightPercentage,
         private float $rotationAngle,
         private float $cornerRadiusPercentage
    ) {}
    
    /**
     * @return float
     */
    public function getXPercentage(): float
    {
        return $this->xPercentage;
    }

    /**
     * @return float
     */
    public function getYPercentage(): float
    {
        return $this->yPercentage;
    }

    /**
     * @return float
     */
    public function getWidthPercentage(): float
    {
        return $this->widthPercentage;
    }

    /**
     * @return float
     */
    public function getHeightPercentage(): float
    {
        return $this->heightPercentage;
    }

    /**
     * @return float
     */
    public function getRotationAngle(): float
    {
        return $this->rotationAngle;
    }

    /**
     * @return float
     */
    public function getCornerRadiusPercentage(): float
    {
        return $this->cornerRadiusPercentage;
    }
}
