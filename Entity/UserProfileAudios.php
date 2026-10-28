<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents the audios displayed on a user's profile.
 *
 * @see https://core.telegram.org/bots/api#userprofileaudios
 */
final class UserProfileAudios
{
    /**
     * @param int $totalCount Total number of profile audios for the target user
     * @param Audio[] $audios Requested profile audios
    */
    public function __construct
    (
         private int $totalCount,
         private array $audios
    ) {}
    
    /**
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    /**
     * @return Audio[]
     */
    public function getAudios(): array
    {
        return $this->audios;
    }
}
