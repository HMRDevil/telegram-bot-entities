<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents a service message about the completion of a giveaway without public winners.
 *
 * @see https://core.telegram.org/bots/api#giveawaycompleted
 */
final class GiveawayCompleted
{
    /**
     * @param int $winnerCount Number of winners in the giveaway
     * @param int|null $unclaimedPrizeCount Optional. Number of undistributed prizes
     * @param Message|null $giveawayMessage Optional. Message with the giveaway that was completed, if it wasn't deleted
     * @param bool|null $isStarGiveaway Optional. True, if the giveaway is a Telegram Star giveaway. Otherwise, currently, the giveaway is a Telegram Premium giveaway.
    */
    public function __construct
    (
         private int $winnerCount,
         private ?int $unclaimedPrizeCount = null,
         private ?Message $giveawayMessage = null,
         private ?bool $isStarGiveaway = null
    ) {}
    
    /**
     * @return int
     */
    public function getWinnerCount(): int
    {
        return $this->winnerCount;
    }

    /**
     * @return int|null
     */
    public function getUnclaimedPrizeCount(): ?int
    {
        return $this->unclaimedPrizeCount;
    }

    /**
     * @return Message|null
     */
    public function getGiveawayMessage(): ?Message
    {
        return $this->giveawayMessage;
    }

    /**
     * @return bool|null
     */
    public function getIsStarGiveaway(): ?bool
    {
        return $this->isStarGiveaway;
    }
}
