<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A quotation with centered text, loosely corresponding to the HTML tag <aside>.
 *
 * @see https://core.telegram.org/bots/api#inputrichblockpullquotation
 */
final class InputRichBlockPullQuotation
{
    /**
     * @param string $type Type of the block, always "pullquote"
     * @param RichText $text Text of the block
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
