<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * The withdrawal is in progress.
 *
 * @see https://core.telegram.org/bots/api#revenuewithdrawalstatepending
 */
final class RevenueWithdrawalStatePending
{
    /**
     * @param string $type Type of the state, always "pending"
    */
    public function __construct
    (
         private string $type
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}
