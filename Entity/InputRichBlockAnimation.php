<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A block with an animation, corresponding to the HTML tag <video>.
 *
 * @see https://core.telegram.org/bots/api#inputrichblockanimation
 */
final class InputRichBlockAnimation
{
    /**
     * @var string $type Type of the block, always “animation”
     */
    private string $type = 'animation';

    /**
     * @param InputMediaAnimation $animation The animation. Caption is ignored.
     * @param RichBlockCaption|null $caption Optional. Caption of the block
    */
    public function __construct
    (
         private InputMediaAnimation $animation,
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
     * @return InputMediaAnimation
     */
    public function getAnimation(): InputMediaAnimation
    {
        return $this->animation;
    }

    /**
     * @return RichBlockCaption|null
     */
    public function getCaption(): ?RichBlockCaption
    {
        return $this->caption;
    }
}
