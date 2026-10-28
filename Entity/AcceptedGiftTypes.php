<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object describes the types of gifts that can be gifted to a user or a chat.
 *
 * @see https://core.telegram.org/bots/api#acceptedgifttypes
 */
final class AcceptedGiftTypes
{
    /**
     * @param bool $unlimitedGifts True, if unlimited regular gifts are accepted
     * @param bool $limitedGifts True, if limited regular gifts are accepted
     * @param bool $uniqueGifts True, if unique gifts or gifts that can be upgraded to unique for free are accepted
     * @param bool $premiumSubscription True, if a Telegram Premium subscription is accepted
     * @param bool $giftsFromChannels True, if transfers of unique gifts from channels are accepted
    */
    public function __construct
    (
         private bool $unlimitedGifts,
         private bool $limitedGifts,
         private bool $uniqueGifts,
         private bool $premiumSubscription,
         private bool $giftsFromChannels
    ) {}
    
    /**
     * @return bool
     */
    public function getUnlimitedGifts(): bool
    {
        return $this->unlimitedGifts;
    }

    /**
     * @return bool
     */
    public function getLimitedGifts(): bool
    {
        return $this->limitedGifts;
    }

    /**
     * @return bool
     */
    public function getUniqueGifts(): bool
    {
        return $this->uniqueGifts;
    }

    /**
     * @return bool
     */
    public function getPremiumSubscription(): bool
    {
        return $this->premiumSubscription;
    }

    /**
     * @return bool
     */
    public function getGiftsFromChannels(): bool
    {
        return $this->giftsFromChannels;
    }
}
