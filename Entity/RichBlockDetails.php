<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * An expandable block for details disclosure, corresponding to the HTML tag <details>.
 *
 * @see https://core.telegram.org/bots/api#richblockdetails
 */
final class RichBlockDetails
{
    /**
     * @param string $type Type of the block, always "details"
     * @param RichText $summary Always shown summary of the block
     * @param RichBlock[] $blocks Content of the block
     * @param bool|null $isOpen Optional. True, if the content of the block is visible by default
    */
    public function __construct
    (
         private string $type,
         private RichText $summary,
         private array $blocks,
         private ?bool $isOpen = null
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return RichText
     */
    public function getSummary(): RichText
    {
        return $this->summary;
    }

    /**
     * @return RichBlock[]
     */
    public function getBlocks(): array
    {
        return $this->blocks;
    }

    /**
     * @return bool|null
     */
    public function getIsOpen(): ?bool
    {
        return $this->isOpen;
    }
}
