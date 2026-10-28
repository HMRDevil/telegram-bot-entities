<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a Telegram Star transaction. Note that if the buyer initiates a chargeback with the payment provider from whom they acquired Stars (e.g., Apple, Google) following this transaction, the refunded Stars will be deducted from the bot's balance. This is outside of Telegram's control.
 *
 * @see https://core.telegram.org/bots/api#startransaction
 */
final class StarTransaction
{
    /**
     * @param string $id Unique identifier of the transaction. Coincides with the identifier of the original transaction for refund transactions. Coincides with SuccessfulPayment.telegram_payment_charge_id for successful incoming payments from users.
     * @param int $amount Integer amount of Telegram Stars transferred by the transaction
     * @param int $date Date the transaction was created in Unix time
     * @param int|null $nanostarAmount Optional. The number of 1/1000000000 shares of Telegram Stars transferred by the transaction; from 0 to 999999999
     * @param TransactionPartner|null $source Optional. Source of an incoming transaction (e.g., a user purchasing goods or services, Fragment refunding a failed withdrawal). Only for incoming transactions.
     * @param TransactionPartner|null $receiver Optional. Receiver of an outgoing transaction (e.g., a user for a purchase refund, Fragment for a withdrawal). Only for outgoing transactions.
    */
    public function __construct
    (
         private string $id,
         private int $amount,
         private int $date,
         private ?int $nanostarAmount = null,
         private ?TransactionPartner $source = null,
         private ?TransactionPartner $receiver = null
    ) {}
    
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @return int
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * @return int|null
     */
    public function getNanostarAmount(): ?int
    {
        return $this->nanostarAmount;
    }

    /**
     * @return TransactionPartner|null
     */
    public function getSource(): ?TransactionPartner
    {
        return $this->source;
    }

    /**
     * @return TransactionPartner|null
     */
    public function getReceiver(): ?TransactionPartner
    {
        return $this->receiver;
    }
}
