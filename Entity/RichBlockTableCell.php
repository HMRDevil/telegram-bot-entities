<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Cell in a table.
 *
 * @see https://core.telegram.org/bots/api#richblocktablecell
 */
final class RichBlockTableCell
{
    /**
     * @param string $align Horizontal cell content alignment. Currently, must be one of "left", "center", or "right".
     * @param string $valign Vertical cell content alignment. Currently, must be one of "top", "middle", or "bottom".
     * @param RichText|null $text Optional. Text in the cell. If omitted, then the cell is invisible.
     * @param bool|null $isHeader Optional. True, if the cell is a header cell
     * @param int|null $colspan Optional. The number of columns the cell spans if it is bigger than 1
     * @param int|null $rowspan Optional. The number of rows the cell spans if it is bigger than 1
    */
    public function __construct
    (
         private string $align,
         private string $valign,
         private ?RichText $text = null,
         private ?bool $isHeader = null,
         private ?int $colspan = null,
         private ?int $rowspan = null
    ) {}
    
    /**
     * @return string
     */
    public function getAlign(): string
    {
        return $this->align;
    }

    /**
     * @return string
     */
    public function getValign(): string
    {
        return $this->valign;
    }

    /**
     * @return RichText|null
     */
    public function getText(): ?RichText
    {
        return $this->text;
    }

    /**
     * @return bool|null
     */
    public function getIsHeader(): ?bool
    {
        return $this->isHeader;
    }

    /**
     * @return int|null
     */
    public function getColspan(): ?int
    {
        return $this->colspan;
    }

    /**
     * @return int|null
     */
    public function getRowspan(): ?int
    {
        return $this->rowspan;
    }
}
