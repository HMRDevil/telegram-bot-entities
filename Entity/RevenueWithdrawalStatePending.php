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
     * @var string $type Type of the state, always “pending”
     */
    private string $type = 'pending';
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}
