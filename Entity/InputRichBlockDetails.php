<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * An expandable block for details disclosure, corresponding to the HTML tag <details>.
 *
 * @see https://core.telegram.org/bots/api#inputrichblockdetails
 */
final class InputRichBlockDetails
{
    /**
     * @var string $type Type of the block, always “details”
     */
    private string $type = 'details';

    /**
     * @param RichText $summary Always shown summary of the block
     * @param InputRichBlock[] $blocks Content of the block
     * @param true|null $isOpen Optional. Pass True if the content of the block is visible by default
    */
    public function __construct
    (
         private RichText $summary,
         private array $blocks,
         private ?true $isOpen = null
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
     * @return InputRichBlock[]
     */
    public function getBlocks(): array
    {
        return $this->blocks;
    }

    /**
     * @return true|null
     */
    public function getIsOpen(): ?true
    {
        return $this->isOpen;
    }
}
