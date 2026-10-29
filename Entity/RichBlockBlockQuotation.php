<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A block quotation, corresponding to the HTML tag <blockquote>.
 *
 * @see https://core.telegram.org/bots/api#richblockblockquotation
 */
final class RichBlockBlockQuotation
{
    /**
     * @param string $type Type of the block, always "blockquote"
     * @param RichBlock[] $blocks Content of the block
     * @param RichText|null $credit Optional. Credit of the block
    */
    public function __construct
    (
         private string $type,
         private array $blocks,
         private ?RichText $credit = null
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return RichBlock[]
     */
    public function getBlocks(): array
    {
        return $this->blocks;
    }

    /**
     * @return RichText|null
     */
    public function getCredit(): ?RichText
    {
        return $this->credit;
    }
}
