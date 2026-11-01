<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A list of blocks, corresponding to the HTML tag <ul> or <ol> with multiple nested tags <li>.
 *
 * @see https://core.telegram.org/bots/api#inputrichblocklist
 */
final class InputRichBlockList
{
    /**
     * @param string $type Type of the block, always "list"
     * @param InputRichBlockListItem[] $items Items of the list
    */
    public function __construct
    (
         private string $type,
         private array $items
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return InputRichBlockListItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
}
