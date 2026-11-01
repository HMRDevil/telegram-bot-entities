<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A slideshow, corresponding to the custom HTML tag <tg-slideshow>.
 *
 * @see https://core.telegram.org/bots/api#inputrichblockslideshow
 */
final class InputRichBlockSlideshow
{
    /**
     * @param string $type Type of the block, always "slideshow"
     * @param InputRichBlock[] $blocks Elements of the slideshow
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
