<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A block with an anchor, corresponding to the HTML tag <a> with the attribute name.
 *
 * @see https://core.telegram.org/bots/api#inputrichblockanchor
 */
final class InputRichBlockAnchor
{
    /**
     * @param string $type Type of the block, always "anchor"
     * @param string $name The name of the anchor
    */
    public function __construct
    (
         private string $type,
         private string $name
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
