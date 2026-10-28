<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * The paid media is a live photo.
 *
 * @see https://core.telegram.org/bots/api#paidmedialivephoto
 */
final class PaidMediaLivePhoto
{
    /**
     * @param string $type Type of the paid media, always "live_photo"
     * @param LivePhoto $livePhoto The photo
    */
    public function __construct
    (
         private string $type,
         private LivePhoto $livePhoto
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return LivePhoto
     */
    public function getLivePhoto(): LivePhoto
    {
        return $this->livePhoto;
    }
}
