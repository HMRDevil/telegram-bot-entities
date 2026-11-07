<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * The background is a wallpaper in the JPEG format.
 *
 * @see https://core.telegram.org/bots/api#backgroundtypewallpaper
 */
final class BackgroundTypeWallpaper
{
    /**
     * @param string $type Type of the background, always “wallpaper”
     * @param Document $document Document with the wallpaper
     * @param int $darkThemeDimming Dimming of the background in dark themes, as a percentage; 0-100
     * @param true|null $isBlurred Optional. True, if the wallpaper is downscaled to fit in a 450x450 square and then box-blurred with radius 12
     * @param true|null $isMoving Optional. True, if the background moves slightly when the device is tilted
    */
    public function __construct
    (
         private string $type,
         private Document $document,
         private int $darkThemeDimming,
         private ?true $isBlurred = null,
         private ?true $isMoving = null
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return Document
     */
    public function getDocument(): Document
    {
        return $this->document;
    }

    /**
     * @return int
     */
    public function getDarkThemeDimming(): int
    {
        return $this->darkThemeDimming;
    }

    /**
     * @return true|null
     */
    public function getIsBlurred(): ?true
    {
        return $this->isBlurred;
    }

    /**
     * @return true|null
     */
    public function getIsMoving(): ?true
    {
        return $this->isMoving;
    }
}
