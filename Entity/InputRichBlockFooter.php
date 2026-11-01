<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A footer, corresponding to the HTML tag <footer>.
 *
 * @see https://core.telegram.org/bots/api#inputrichblockfooter
 */
final class InputRichBlockFooter
{
    /**
     * @param string $type Type of the block, always "footer"
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
