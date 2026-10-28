<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents a message about the completion of a giveaway with public winners.
 *
 * @see https://core.telegram.org/bots/api#giveawaywinners
 */
final class GiveawayWinners
{
    /**
     * @param Chat $chat The chat that created the giveaway
     * @param int $giveawayMessageId Identifier of the message with the giveaway in the chat
     * @param int $winnersSelectionDate Point in time (Unix timestamp) when winners of the giveaway were selected
     * @param int $winnerCount Total number of winners in the giveaway
     * @param User[] $winners List of up to 100 winners of the giveaway
     * @param int|null $additionalChatCount Optional. The number of other chats the user had to join in order to be eligible for the giveaway
     * @param int|null $prizeStarCount Optional. The number of Telegram Stars that were split between giveaway winners; for Telegram Star giveaways only
     * @param int|null $premiumSubscriptionMonthCount Optional. The number of months the Telegram Premium subscription won from the giveaway will be active for; for Telegram Premium giveaways only
     * @param int|null $unclaimedPrizeCount Optional. Number of undistributed prizes
     * @param bool|null $onlyNewMembers Optional. True, if only users who had joined the chats after the giveaway started were eligible to win
     * @param bool|null $wasRefunded Optional. True, if the giveaway was canceled because the payment for it was refunded
     * @param string|null $prizeDescription Optional. Description of additional giveaway prize
    */
    public function __construct
    (
         private Chat $chat,
         private int $giveawayMessageId,
         private int $winnersSelectionDate,
         private int $winnerCount,
         private array $winners,
         private ?int $additionalChatCount = null,
         private ?int $prizeStarCount = null,
         private ?int $premiumSubscriptionMonthCount = null,
         private ?int $unclaimedPrizeCount = null,
         private ?bool $onlyNewMembers = null,
         private ?bool $wasRefunded = null,
         private ?string $prizeDescription = null
    ) {}
    
    /**
     * @return Chat
     */
    public function getChat(): Chat
    {
        return $this->chat;
    }

    /**
     * @return int
     */
    public function getGiveawayMessageId(): int
    {
        return $this->giveawayMessageId;
    }

    /**
     * @return int
     */
    public function getWinnersSelectionDate(): int
    {
        return $this->winnersSelectionDate;
    }

    /**
     * @return int
     */
    public function getWinnerCount(): int
    {
        return $this->winnerCount;
    }

    /**
     * @return User[]
     */
    public function getWinners(): array
    {
        return $this->winners;
    }

    /**
     * @return int|null
     */
    public function getAdditionalChatCount(): ?int
    {
        return $this->additionalChatCount;
    }

    /**
     * @return int|null
     */
    public function getPrizeStarCount(): ?int
    {
        return $this->prizeStarCount;
    }

    /**
     * @return int|null
     */
    public function getPremiumSubscriptionMonthCount(): ?int
    {
        return $this->premiumSubscriptionMonthCount;
    }

    /**
     * @return int|null
     */
    public function getUnclaimedPrizeCount(): ?int
    {
        return $this->unclaimedPrizeCount;
    }

    /**
     * @return bool|null
     */
    public function getOnlyNewMembers(): ?bool
    {
        return $this->onlyNewMembers;
    }

    /**
     * @return bool|null
     */
    public function getWasRefunded(): ?bool
    {
        return $this->wasRefunded;
    }

    /**
     * @return string|null
     */
    public function getPrizeDescription(): ?string
    {
        return $this->prizeDescription;
    }
}
