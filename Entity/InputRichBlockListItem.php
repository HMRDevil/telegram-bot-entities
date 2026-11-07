<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * An item of a list to be sent.
 *
 * @see https://core.telegram.org/bots/api#inputrichblocklistitem
 */
final class InputRichBlockListItem
{
    /**
     * @param InputRichBlock[] $blocks The content of the item
     * @param true|null $hasCheckbox Optional. Pass True if the item has a checkbox
     * @param true|null $isChecked Optional. Pass True if the item has a checked checkbox
     * @param int|null $value Optional. For ordered lists, the numeric value of the item label
     * @param string|null $type Optional. For ordered lists, the type of the item label; must be one of “a” for lowercase letters, “A” for uppercase letters, “i” for lowercase Roman numerals, “I” for uppercase Roman numerals, or “1” for decimal numbers
    */
    public function __construct
    (
         private array $blocks,
         private ?true $hasCheckbox = null,
         private ?true $isChecked = null,
         private ?int $value = null,
         private ?string $type = null
    ) {}
    
    /**
     * @return InputRichBlock[]
     */
    public function getBlocks(): array
    {
        return $this->blocks;
    }

    /**
     * @return true|null
     */
    public function getHasCheckbox(): ?true
    {
        return $this->hasCheckbox;
    }

    /**
     * @return true|null
     */
    public function getIsChecked(): ?true
    {
        return $this->isChecked;
    }

    /**
     * @return int|null
     */
    public function getValue(): ?int
    {
        return $this->value;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
}
