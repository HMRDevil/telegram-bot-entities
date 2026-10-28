<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents a message about a scheduled giveaway.
 *
 * @see https://core.telegram.org/bots/api#giveaway
 */
final class Giveaway
{
    /**
     * @param Chat[] $chats The list of chats which the user must join to participate in the giveaway
     * @param int $winnersSelectionDate Point in time (Unix timestamp) when winners of the giveaway will be selected
     * @param int $winnerCount The number of users which are supposed to be selected as winners of the giveaway
     * @param bool|null $onlyNewMembers Optional. True, if only users who join the chats after the giveaway started should be eligible to win
     * @param bool|null $hasPublicWinners Optional. True, if the list of giveaway winners will be visible to everyone
     * @param string|null $prizeDescription Optional. Description of additional giveaway prize
     * @param String[]|null $countryCodes Optional. A list of two-letter ISO 3166-1 alpha-2 country codes indicating the countries from which eligible users for the giveaway must come. If empty, then all users can participate in the giveaway. Users with a phone number that was bought on Fragment can always participate in giveaways.
     * @param int|null $prizeStarCount Optional. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only
     * @param int|null $premiumSubscriptionMonthCount Optional. The number of months the Telegram Premium subscription won from the giveaway will be active for; for Telegram Premium giveaways only
    */
    public function __construct
    (
         private array $chats,
         private int $winnersSelectionDate,
         private int $winnerCount,
         private ?bool $onlyNewMembers = null,
         private ?bool $hasPublicWinners = null,
         private ?string $prizeDescription = null,
         private ?array $countryCodes = null,
         private ?int $prizeStarCount = null,
         private ?int $premiumSubscriptionMonthCount = null
    ) {}
    
    /**
     * @return Chat[]
     */
    public function getChats(): array
    {
        return $this->chats;
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
     * @return bool|null
     */
    public function getOnlyNewMembers(): ?bool
    {
        return $this->onlyNewMembers;
    }

    /**
     * @return bool|null
     */
    public function getHasPublicWinners(): ?bool
    {
        return $this->hasPublicWinners;
    }

    /**
     * @return string|null
     */
    public function getPrizeDescription(): ?string
    {
        return $this->prizeDescription;
    }

    /**
     * @return String[]|null
     */
    public function getCountryCodes(): ?array
    {
        return $this->countryCodes;
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
}
