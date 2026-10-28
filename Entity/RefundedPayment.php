<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object contains basic information about a refunded payment.
 *
 * @see https://core.telegram.org/bots/api#refundedpayment
 */
final class RefundedPayment
{
    /**
     * @param string $currency Three-letter ISO 4217 currency code, or "XTR" for payments in Telegram Stars. Currently, always "XTR".
     * @param int $totalAmount Total refunded price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45, total_amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
     * @param string $invoicePayload Bot-specified invoice payload
     * @param string $telegramPaymentChargeId Telegram payment identifier
     * @param string|null $providerPaymentChargeId Optional. Provider payment identifier
    */
    public function __construct
    (
         private string $currency,
         private int $totalAmount,
         private string $invoicePayload,
         private string $telegramPaymentChargeId,
         private ?string $providerPaymentChargeId = null
    ) {}
    
    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @return int
     */
    public function getTotalAmount(): int
    {
        return $this->totalAmount;
    }

    /**
     * @return string
     */
    public function getInvoicePayload(): string
    {
        return $this->invoicePayload;
    }

    /**
     * @return string
     */
    public function getTelegramPaymentChargeId(): string
    {
        return $this->telegramPaymentChargeId;
    }

    /**
     * @return string|null
     */
    public function getProviderPaymentChargeId(): ?string
    {
        return $this->providerPaymentChargeId;
    }
}
