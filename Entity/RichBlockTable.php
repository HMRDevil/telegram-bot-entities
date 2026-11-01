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
     * @param string $type Type of the block, always "table"
     * @param RichBlockTableCell[][] $cells Cells of the table
     * @param bool|null $isBordered Optional. True, if the table has borders
     * @param bool|null $isStriped Optional. True, if the table is striped
     * @param RichText|null $caption Optional. Caption of the table
    */
    public function __construct
    (
         private string $type,
         private array $cells,
         private ?bool $isBordered = null,
         private ?bool $isStriped = null,
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
     * @return bool|null
     */
    public function getIsBordered(): ?bool
    {
        return $this->isBordered;
    }

    /**
     * @return bool|null
     */
    public function getIsStriped(): ?bool
    {
        return $this->isStriped;
    }

    /**
     * @return RichText|null
     */
    public function getCaption(): ?RichText
    {
        return $this->caption;
    }
}
