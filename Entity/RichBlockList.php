<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A list of blocks, corresponding to the HTML tag <ul> or <ol> with multiple nested tags <li>.
 *
 * @see https://core.telegram.org/bots/api#richblocklist
 */
final class RichBlockList
{
    /**
     * @var string $type Type of the block, always “list”
     */
    private string $type = 'list';

    /**
     * @param RichBlockListItem[] $items Items of the list
    */
    public function __construct
    (
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
     * @return RichBlockListItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
}
