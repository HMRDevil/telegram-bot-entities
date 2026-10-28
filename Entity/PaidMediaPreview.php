<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * The paid media isn't available before the payment.
 *
 * @see https://core.telegram.org/bots/api#paidmediapreview
 */
final class PaidMediaPreview
{
    /**
     * @param string $type Type of the paid media, always "preview"
     * @param int|null $width Optional. Media width as defined by the sender
     * @param int|null $height Optional. Media height as defined by the sender
     * @param int|null $duration Optional. Duration of the media in seconds as defined by the sender
    */
    public function __construct
    (
         private string $type,
         private ?int $width = null,
         private ?int $height = null,
         private ?int $duration = null
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return int|null
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * @return int|null
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * @return int|null
     */
    public function getDuration(): ?int
    {
        return $this->duration;
    }
}
