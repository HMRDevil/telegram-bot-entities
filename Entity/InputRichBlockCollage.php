<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A collage, corresponding to the custom HTML tag <tg-collage>.
 *
 * @see https://core.telegram.org/bots/api#inputrichblockcollage
 */
final class InputRichBlockCollage
{
    /**
     * @param string $type Type of the block, always "collage"
     * @param InputRichBlock[] $blocks Elements of the collage
     * @param RichBlockCaption|null $caption Optional. Caption of the block
    */
    public function __construct
    (
         private string $type,
         private array $blocks,
         private ?RichBlockCaption $caption = null
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return InputRichBlock[]
     */
    public function getBlocks(): array
    {
        return $this->blocks;
    }

    /**
     * @return RichBlockCaption|null
     */
    public function getCaption(): ?RichBlockCaption
    {
        return $this->caption;
    }
}
