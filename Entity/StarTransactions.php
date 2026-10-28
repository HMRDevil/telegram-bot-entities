<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Contains a list of Telegram Star transactions.
 *
 * @see https://core.telegram.org/bots/api#startransactions
 */
final class StarTransactions
{
    /**
     * @param StarTransaction[] $transactions The list of transactions
    */
    public function __construct
    (
         private array $transactions
    ) {}
    
    /**
     * @return StarTransaction[]
     */
    public function getTransactions(): array
    {
        return $this->transactions;
    }
}
