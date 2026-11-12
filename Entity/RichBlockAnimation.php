<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A block with an animation, corresponding to the HTML tag <video>.
 *
 * @see https://core.telegram.org/bots/api#richblockanimation
 */
final class RichBlockAnimation
{
    /**
     * @var string $type Type of the block, always “animation”
     */
    private string $type = 'animation';

    /**
     * @param Animation $animation The animation
     * @param true|null $hasSpoiler Optional. True, if the media preview is covered by a spoiler animation
     * @param RichBlockCaption|null $caption Optional. Caption of the block
    */
    public function __construct
    (
         private Animation $animation,
         private ?true $hasSpoiler = null,
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
     * @return Animation
     */
    public function getAnimation(): Animation
    {
        return $this->animation;
    }

    /**
     * @return true|null
     */
    public function getHasSpoiler(): ?true
    {
        return $this->hasSpoiler;
    }

    /**
     * @return RichBlockCaption|null
     */
    public function getCaption(): ?RichBlockCaption
    {
        return $this->caption;
    }
}
