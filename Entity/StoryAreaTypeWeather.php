<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a story area containing weather information. Currently, a story can have up to 3 weather areas.
 *
 * @see https://core.telegram.org/bots/api#storyareatypeweather
 */
final class StoryAreaTypeWeather
{
    /**
     * @param string $type Type of the area, always "weather"
     * @param float $temperature Temperature, in degree Celsius
     * @param string $emoji Emoji representing the weather
     * @param int $backgroundColor A color of the area background in the ARGB format
    */
    public function __construct
    (
         private string $type,
         private float $temperature,
         private string $emoji,
         private int $backgroundColor
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return float
     */
    public function getTemperature(): float
    {
        return $this->temperature;
    }

    /**
     * @return string
     */
    public function getEmoji(): string
    {
        return $this->emoji;
    }

    /**
     * @return int
     */
    public function getBackgroundColor(): int
    {
        return $this->backgroundColor;
    }
}
