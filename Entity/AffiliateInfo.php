<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Contains information about the affiliate that received a commission via this transaction.
 *
 * @see https://core.telegram.org/bots/api#affiliateinfo
 */
final class AffiliateInfo
{
    /**
     * @param int $commissionPerMille The number of Telegram Stars received by the affiliate for each 1000 Telegram Stars received by the bot from referred users
     * @param int $amount Integer amount of Telegram Stars received by the affiliate from the transaction, rounded to 0; can be negative for refunds
     * @param User|null $affiliateUser Optional. The bot or the user that received an affiliate commission if it was received by a bot or a user
     * @param Chat|null $affiliateChat Optional. The chat that received an affiliate commission if it was received by a chat
     * @param int|null $nanostarAmount Optional. The number of 1/1000000000 shares of Telegram Stars received by the affiliate; from -999999999 to 999999999; can be negative for refunds
    */
    public function __construct
    (
         private int $commissionPerMille,
         private int $amount,
         private ?User $affiliateUser = null,
         private ?Chat $affiliateChat = null,
         private ?int $nanostarAmount = null
    ) {}
    
    /**
     * @return int
     */
    public function getCommissionPerMille(): int
    {
        return $this->commissionPerMille;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @return User|null
     */
    public function getAffiliateUser(): ?User
    {
        return $this->affiliateUser;
    }

    /**
     * @return Chat|null
     */
    public function getAffiliateChat(): ?Chat
    {
        return $this->affiliateChat;
    }

    /**
     * @return int|null
     */
    public function getNanostarAmount(): ?int
    {
        return $this->nanostarAmount;
    }
}
