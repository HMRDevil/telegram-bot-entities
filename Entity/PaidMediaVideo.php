<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * The paid media is a video.
 *
 * @see https://core.telegram.org/bots/api#paidmediavideo
 */
final class PaidMediaVideo
{
    /**
     * @param string $type Type of the paid media, always "video"
     * @param Video $video The video
    */
    public function __construct
    (
         private string $type,
         private Video $video
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
}
