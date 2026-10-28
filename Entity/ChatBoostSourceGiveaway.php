<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * The boost was obtained by the creation of a Telegram Premium or a Telegram Star giveaway. This boosts the chat 4 times for the duration of the corresponding Telegram Premium subscription for Telegram Premium giveaways and prize_star_count / 500 times for one year for Telegram Star giveaways.
 *
 * @see https://core.telegram.org/bots/api#chatboostsourcegiveaway
 */
final class ChatBoostSourceGiveaway
{
    /**
     * @param string $source Source of the boost, always "giveaway"
     * @param int $giveawayMessageId Identifier of a message in the chat with the giveaway; the message could have been deleted already. May be 0 if the message isn't sent yet.
     * @param User|null $user Optional. User that won the prize in the giveaway if any; for Telegram Premium giveaways only
     * @param int|null $prizeStarCount Optional. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only
     * @param bool|null $isUnclaimed Optional. True, if the giveaway was completed, but there was no user to win the prize
    */
    public function __construct
    (
         private string $source,
         private int $giveawayMessageId,
         private ?User $user = null,
         private ?int $prizeStarCount = null,
         private ?bool $isUnclaimed = null
    ) {}
    
    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @return int
     */
    public function getGiveawayMessageId(): int
    {
        return $this->giveawayMessageId;
    }

    /**
     * @return User|null
     */
    public function getUser(): ?User
    {
        return $this->user;
    }

    /**
     * @return int|null
     */
    public function getPrizeStarCount(): ?int
    {
        return $this->prizeStarCount;
    }

    /**
     * @return bool|null
     */
    public function getIsUnclaimed(): ?bool
    {
        return $this->isUnclaimed;
    }
}
