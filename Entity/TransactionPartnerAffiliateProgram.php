<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes the affiliate program that issued the affiliate commission received via this transaction.
 *
 * @see https://core.telegram.org/bots/api#transactionpartneraffiliateprogram
 */
final class TransactionPartnerAffiliateProgram
{
    /**
     * @param string $type Type of the transaction partner, always "affiliate_program"
     * @param int $commissionPerMille The number of Telegram Stars received by the bot for each 1000 Telegram Stars received by the affiliate program sponsor from referred users
     * @param User|null $sponsorUser Optional. Information about the bot that sponsored the affiliate program
    */
    public function __construct
    (
         private string $type,
         private int $commissionPerMille,
         private ?User $sponsorUser = null
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getCommissionPerMille(): int
    {
        return $this->commissionPerMille;
    }

    /**
     * @return User|null
     */
    public function getSponsorUser(): ?User
    {
        return $this->sponsorUser;
    }
}
