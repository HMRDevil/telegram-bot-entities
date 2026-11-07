<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * The background is a .PNG or .TGV (gzipped subset of SVG with MIME type “application/x-tgwallpattern”) pattern to be combined with the background fill chosen by the user.
 *
 * @see https://core.telegram.org/bots/api#backgroundtypepattern
 */
final class BackgroundTypePattern
{
    /**
     * @param string $type Type of the background, always “pattern”
     * @param Document $document Document with the pattern
     * @param BackgroundFill $fill The background fill that is combined with the pattern
     * @param int $intensity Intensity of the pattern when it is shown above the filled background; 0-100
     * @param true|null $isInverted Optional. True, if the background fill must be applied only to the pattern itself. All other pixels are black in this case. For dark themes only.
     * @param true|null $isMoving Optional. True, if the background moves slightly when the device is tilted
    */
    public function __construct
    (
         private string $type,
         private Document $document,
         private BackgroundFill $fill,
         private int $intensity,
         private ?true $isInverted = null,
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
     * @return BackgroundFill
     */
    public function getFill(): BackgroundFill
    {
        return $this->fill;
    }

    /**
     * @return int
     */
    public function getIntensity(): int
    {
        return $this->intensity;
    }

    /**
     * @return true|null
     */
    public function getIsInverted(): ?true
    {
        return $this->isInverted;
    }

    /**
     * @return true|null
     */
    public function getIsMoving(): ?true
    {
        return $this->isMoving;
    }
}
