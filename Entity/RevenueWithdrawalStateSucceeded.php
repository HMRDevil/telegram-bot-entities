<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * The withdrawal succeeded.
 *
 * @see https://core.telegram.org/bots/api#revenuewithdrawalstatesucceeded
 */
final class RevenueWithdrawalStateSucceeded
{
    /**
     * @var string $type Type of the state, always “succeeded”
     */
    private string $type = 'succeeded';

    /**
     * @param int $date Date the withdrawal was completed in Unix time
     * @param string $url An HTTPS URL that can be used to see transaction details
    */
    public function __construct
    (
         private int $date,
         private string $url
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
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
}
