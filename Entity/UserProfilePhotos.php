<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represent a user's profile pictures.
 *
 * @see https://core.telegram.org/bots/api#userprofilephotos
 */
final class UserProfilePhotos
{
    /**
     * @param int $totalCount Total number of profile pictures the target user has
     * @param PhotoSize[][] $photos Requested profile pictures (in up to 4 sizes each)
    */
    public function __construct
    (
         private int $totalCount,
         private array $photos
    ) {}
    
    /**
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    /**
     * @return PhotoSize[][]
     */
    public function getPhotos(): array
    {
        return $this->photos;
    }
}
