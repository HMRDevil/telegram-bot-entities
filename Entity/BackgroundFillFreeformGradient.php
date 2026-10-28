<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * The background is a freeform gradient that rotates after every message in the chat.
 *
 * @see https://core.telegram.org/bots/api#backgroundfillfreeformgradient
 */
final class BackgroundFillFreeformGradient
{
    /**
     * @param string $type Type of the background fill, always "freeform_gradient"
     * @param Integer[] $colors A list of the 3 or 4 base colors that are used to generate the freeform gradient in the RGB24 format
    */
    public function __construct
    (
         private string $type,
         private array $colors
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return Integer[]
     */
    public function getColors(): array
    {
        return $this->colors;
    }
}
