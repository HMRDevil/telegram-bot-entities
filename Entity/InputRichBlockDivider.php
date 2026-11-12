<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A divider, corresponding to the HTML tag <hr/>.
 *
 * @see https://core.telegram.org/bots/api#inputrichblockdivider
 */
final class InputRichBlockDivider
{
    /**
     * @var string $type Type of the block, always “divider”
     */
    private string $type = 'divider';
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}
