<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a withdrawal transaction with Fragment.
 *
 * @see https://core.telegram.org/bots/api#transactionpartnerfragment
 */
final class TransactionPartnerFragment
{
    /**
     * @param string $type Type of the transaction partner, always "fragment"
     * @param RevenueWithdrawalState|null $withdrawalState Optional. State of the transaction if the transaction is outgoing
    */
    public function __construct
    (
         private string $type,
         private ?RevenueWithdrawalState $withdrawalState = null
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return RevenueWithdrawalState|null
     */
    public function getWithdrawalState(): ?RevenueWithdrawalState
    {
        return $this->withdrawalState;
    }
}
