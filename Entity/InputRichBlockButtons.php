<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A block containing a list of buttons that are shown in one row, corresponding to the custom HTML tag <tg-button-row>.
 *
 * @see https://core.telegram.org/bots/api#inputrichblockbuttons
 */
final class InputRichBlockButtons
{
    /**
     * @param string $type Type of the block, always "buttons"
     * @param RichMessageButton[] $buttons List of 1-8 buttons to send
     * @param string|null $align Optional. Horizontal alignment of the buttons. Currently, must be one of "left", "center", or "right".
    */
    public function __construct
    (
         private string $type,
         private array $buttons,
         private ?string $align = null
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return RichMessageButton[]
     */
    public function getButtons(): array
    {
        return $this->buttons;
    }

    /**
     * @return string|null
     */
    public function getAlign(): ?string
    {
        return $this->align;
    }
}
