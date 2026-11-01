<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A text paragraph, corresponding to the HTML tag <p>.
 *
 * @see https://core.telegram.org/bots/api#inputrichblockparagraph
 */
final class InputRichBlockParagraph
{
    /**
     * @param string $type Type of the block, always "paragraph"
     * @param RichText $text Text of the block
    */
    public function __construct
    (
         private string $type,
         private RichText $text
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
}
