<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents an inline keyboard that appears right next to the message it belongs to.
 *
 * @see https://core.telegram.org/bots/api#inlinekeyboardmarkup
 */
final class InlineKeyboardMarkup
{
    /**
     * @param InlineKeyboardButton[][] $inlineKeyboard Array of button rows, each represented by an Array of InlineKeyboardButton objects
    */
    public function __construct
    (
         private array $inlineKeyboard
    ) {}
    
    /**
     * @return InlineKeyboardButton[][]
     */
    public function getInlineKeyboard(): array
    {
        return $this->inlineKeyboard;
    }
}
