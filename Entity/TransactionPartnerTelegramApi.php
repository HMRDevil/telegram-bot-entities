<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a transaction with payment for paid broadcasting.
 *
 * @see https://core.telegram.org/bots/api#transactionpartnertelegramapi
 */
final class TransactionPartnerTelegramApi
{
    /**
     * @param string $type Type of the transaction partner, always "telegram_api"
     * @param int $requestCount The number of successful requests that exceeded regular limits and were therefore billed
    */
    public function __construct
    (
         private string $type,
         private int $requestCount
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
    public function getRequestCount(): int
    {
        return $this->requestCount;
    }
}
