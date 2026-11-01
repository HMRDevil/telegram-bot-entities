<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A block quotation, corresponding to the HTML tag <blockquote> with custom attribute "expandable".
 *
 * @see https://core.telegram.org/bots/api#inputrichblockexpandableblockquotation
 */
final class InputRichBlockExpandableBlockQuotation
{
    /**
     * @param string $type Type of the block, always "expandable_blockquote"
     * @param RichText $text Content of the block
     * @param RichText|null $credit Optional. Credit of the block
    */
    public function __construct
    (
         private string $type,
         private RichText $text,
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
     * @return RichText
     */
    public function getText(): RichText
    {
        return $this->text;
    }

    /**
     * @return RichText|null
     */
    public function getCredit(): ?RichText
    {
        return $this->credit;
    }
}
