<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object contains basic information about a successful payment. Note that if the buyer initiates a chargeback with the relevant payment provider following this transaction, the funds may be debited from your balance. This is outside of Telegram's control.
 *
 * @see https://core.telegram.org/bots/api#successfulpayment
 */
final class SuccessfulPayment
{
    /**
     * @param string $currency Three-letter ISO 4217 currency code, or "XTR" for payments in Telegram Stars
     * @param int $totalAmount Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
     * @param string $invoicePayload Bot-specified invoice payload
     * @param string $telegramPaymentChargeId Telegram payment identifier
     * @param string $providerPaymentChargeId Provider payment identifier
     * @param int|null $subscriptionExpirationDate Optional. Expiration date of the subscription, in Unix time; for recurring payments only
     * @param bool|null $isRecurring Optional. True, if the payment is a recurring payment for a subscription
     * @param bool|null $isFirstRecurring Optional. True, if the payment is the first payment for a subscription
     * @param string|null $shippingOptionId Optional. Identifier of the shipping option chosen by the user
     * @param OrderInfo|null $orderInfo Optional. Order information provided by the user
    */
    public function __construct
    (
         private string $currency,
         private int $totalAmount,
         private string $invoicePayload,
         private string $telegramPaymentChargeId,
         private string $providerPaymentChargeId,
         private ?int $subscriptionExpirationDate = null,
         private ?bool $isRecurring = null,
         private ?bool $isFirstRecurring = null,
         private ?string $shippingOptionId = null,
         private ?OrderInfo $orderInfo = null
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
     * @return string
     */
    public function getProviderPaymentChargeId(): string
    {
        return $this->providerPaymentChargeId;
    }

    /**
     * @return int|null
     */
    public function getSubscriptionExpirationDate(): ?int
    {
        return $this->subscriptionExpirationDate;
    }

    /**
     * @return bool|null
     */
    public function getIsRecurring(): ?bool
    {
        return $this->isRecurring;
    }

    /**
     * @return bool|null
     */
    public function getIsFirstRecurring(): ?bool
    {
        return $this->isFirstRecurring;
    }

    /**
     * @return string|null
     */
    public function getShippingOptionId(): ?string
    {
        return $this->shippingOptionId;
    }

    /**
     * @return OrderInfo|null
     */
    public function getOrderInfo(): ?OrderInfo
    {
        return $this->orderInfo;
    }
}
