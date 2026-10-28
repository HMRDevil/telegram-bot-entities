<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object contains information about the color scheme for a user's name, message replies and link previews based on a unique gift.
 *
 * @see https://core.telegram.org/bots/api#uniquegiftcolors
 */
final class UniqueGiftColors
{
    /**
     * @param string $modelCustomEmojiId Custom emoji identifier of the unique gift's model
     * @param string $symbolCustomEmojiId Custom emoji identifier of the unique gift's symbol
     * @param int $lightThemeMainColor Main color used in light themes; RGB format
     * @param Integer[] $lightThemeOtherColors List of 1-3 additional colors used in light themes; RGB format
     * @param int $darkThemeMainColor Main color used in dark themes; RGB format
     * @param Integer[] $darkThemeOtherColors List of 1-3 additional colors used in dark themes; RGB format
    */
    public function __construct
    (
         private string $modelCustomEmojiId,
         private string $symbolCustomEmojiId,
         private int $lightThemeMainColor,
         private array $lightThemeOtherColors,
         private int $darkThemeMainColor,
         private array $darkThemeOtherColors
    ) {}
    
    /**
     * @return string
     */
    public function getModelCustomEmojiId(): string
    {
        return $this->modelCustomEmojiId;
    }

    /**
     * @return string
     */
    public function getSymbolCustomEmojiId(): string
    {
        return $this->symbolCustomEmojiId;
    }

    /**
     * @return int
     */
    public function getLightThemeMainColor(): int
    {
        return $this->lightThemeMainColor;
    }

    /**
     * @return Integer[]
     */
    public function getLightThemeOtherColors(): array
    {
        return $this->lightThemeOtherColors;
    }

    /**
     * @return int
     */
    public function getDarkThemeMainColor(): int
    {
        return $this->darkThemeMainColor;
    }

    /**
     * @return Integer[]
     */
    public function getDarkThemeOtherColors(): array
    {
        return $this->darkThemeOtherColors;
    }
}
