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
     * @param bool|null $forceReply Optional. Pass True if the reply interface must be shown to the user, as if they had manually selected the bot's message and tapped 'Reply'. The value of the field can't be changed when the inline keyboard is edited.
    */
    public function __construct
    (
         private array $inlineKeyboard,
         private ?bool $forceReply = null
    ) {}
    
    /**
     * @return InlineKeyboardButton[][]
     */
    public function getInlineKeyboard(): array
    {
        return $this->inlineKeyboard;
    }

    /**
     * @return bool|null
     */
    public function getForceReply(): ?bool
    {
        return $this->forceReply;
    }
}
