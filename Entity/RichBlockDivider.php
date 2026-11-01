<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A divider, corresponding to the HTML tag <hr/>.
 *
 * @see https://core.telegram.org/bots/api#richblockdivider
 */
final class RichBlockDivider
{
    /**
     * @param string $type Type of the block, always "divider"
    */
    public function __construct
    (
         private string $type
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}
