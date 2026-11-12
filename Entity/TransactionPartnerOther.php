<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a transaction with an unknown source or recipient.
 *
 * @see https://core.telegram.org/bots/api#transactionpartnerother
 */
final class TransactionPartnerOther
{
    /**
     * @var string $type Type of the transaction partner, always “other”
     */
    private string $type = 'affiliate_program';

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}
