<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Contains the list of gifts received and owned by a user or a chat.
 *
 * @see https://core.telegram.org/bots/api#ownedgifts
 */
final class OwnedGifts
{
    /**
     * @param int $totalCount The total number of gifts owned by the user or the chat
     * @param OwnedGift[] $gifts The list of gifts
     * @param string|null $nextOffset Optional. Offset for the next request. If empty, then there are no more results.
    */
    public function __construct
    (
         private int $totalCount,
         private array $gifts,
         private ?string $nextOffset = null
    ) {}
    
    /**
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    /**
     * @return OwnedGift[]
     */
    public function getGifts(): array
    {
        return $this->gifts;
    }

    /**
     * @return string|null
     */
    public function getNextOffset(): ?string
    {
        return $this->nextOffset;
    }
}
