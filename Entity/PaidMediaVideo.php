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
     * @var string $type Type of the paid media, always “video”
     */
    private string $type = 'video';

    /**
     * @param Video $video The video
    */
    public function __construct
    (
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
