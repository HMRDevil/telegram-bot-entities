<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * The withdrawal failed and the transaction was refunded.
 *
 * @see https://core.telegram.org/bots/api#revenuewithdrawalstatefailed
 */
final class RevenueWithdrawalStateFailed
{
    /**
     * @var string $type Type of the state, always “failed”
     */
    private string $type = 'failed';

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}
