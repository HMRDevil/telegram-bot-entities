<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes the paid media added to a message.
 *
 * @see https://core.telegram.org/bots/api#paidmediainfo
 */
final class PaidMediaInfo
{
    /**
     * @param int $starCount The number of Telegram Stars that must be paid to buy access to the media
     * @param PaidMedia[] $paidMedia Information about the paid media
    */
    public function __construct
    (
         private int $starCount,
         private array $paidMedia
    ) {}
    
    /**
     * @return int
     */
    public function getStarCount(): int
    {
        return $this->starCount;
    }

    /**
     * @return PaidMedia[]
     */
    public function getPaidMedia(): array
    {
        return $this->paidMedia;
    }
}
