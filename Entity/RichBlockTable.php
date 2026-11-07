<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A table, corresponding to the HTML tag <table>.
 *
 * @see https://core.telegram.org/bots/api#richblocktable
 */
final class RichBlockTable
{
    /**
     * @param string $type Type of the block, always “table”
     * @param RichBlockTableCell[][] $cells Cells of the table
     * @param true|null $isBordered Optional. True, if the table has borders
     * @param true|null $isStriped Optional. True, if the table is striped
     * @param true|null $isCompact Optional. True, if table cells have smaller indents
     * @param RichText|null $caption Optional. Caption of the table
    */
    public function __construct
    (
         private string $type,
         private array $cells,
         private ?true $isBordered = null,
         private ?true $isStriped = null,
         private ?true $isCompact = null,
         private ?RichText $caption = null
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return RichBlockTableCell[][]
     */
    public function getCells(): array
    {
        return $this->cells;
    }

    /**
     * @return true|null
     */
    public function getIsBordered(): ?true
    {
        return $this->isBordered;
    }

    /**
     * @return true|null
     */
    public function getIsStriped(): ?true
    {
        return $this->isStriped;
    }

    /**
     * @return true|null
     */
    public function getIsCompact(): ?true
    {
        return $this->isCompact;
    }

    /**
     * @return RichText|null
     */
    public function getCaption(): ?RichText
    {
        return $this->caption;
    }
}
