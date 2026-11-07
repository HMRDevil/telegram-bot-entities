<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A block with a video, corresponding to the HTML tag <video>.
 *
 * @see https://core.telegram.org/bots/api#richblockvideo
 */
final class RichBlockVideo
{
    /**
     * @param string $type Type of the block, always “video”
     * @param Video $video The video
     * @param true|null $hasSpoiler Optional. True, if the media preview is covered by a spoiler animation
     * @param RichBlockCaption|null $caption Optional. Caption of the block
    */
    public function __construct
    (
         private string $type,
         private Video $video,
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
     * @return Video
     */
    public function getVideo(): Video
    {
        return $this->video;
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
