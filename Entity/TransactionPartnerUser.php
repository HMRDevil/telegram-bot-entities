<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a transaction with a user.
 *
 * @see https://core.telegram.org/bots/api#transactionpartneruser
 */
final class TransactionPartnerUser
{
    /**
     * @param string $type Type of the transaction partner, always "user"
     * @param string $transactionType Type of the transaction, currently one of "invoice_payment" for payments via invoices, "paid_media_payment" for payments for paid media, "gift_purchase" for gifts sent by the bot, "premium_purchase" for Telegram Premium subscriptions gifted by the bot, "business_account_transfer" for direct transfers from managed business accounts
     * @param User $user Information about the user
     * @param AffiliateInfo|null $affiliate Optional. Information about the affiliate that received a commission via this transaction. Can be available only for "invoice_payment" and "paid_media_payment" transactions.
     * @param string|null $invoicePayload Optional. Bot-specified invoice payload. Can be available only for "invoice_payment" transactions.
     * @param int|null $subscriptionPeriod Optional. The duration of the paid subscription. Can be available only for "invoice_payment" transactions.
     * @param PaidMedia[]|null $paidMedia Optional. Information about the paid media bought by the user; for "paid_media_payment" transactions only
     * @param string|null $paidMediaPayload Optional. Bot-specified paid media payload. Can be available only for "paid_media_payment" transactions.
     * @param Gift|null $gift Optional. The gift sent to the user by the bot; for "gift_purchase" transactions only
     * @param int|null $premiumSubscriptionDuration Optional. Number of months the gifted Telegram Premium subscription will be active for; for "premium_purchase" transactions only
    */
    public function __construct
    (
         private string $type,
         private string $transactionType,
         private User $user,
         private ?AffiliateInfo $affiliate = null,
         private ?string $invoicePayload = null,
         private ?int $subscriptionPeriod = null,
         private ?array $paidMedia = null,
         private ?string $paidMediaPayload = null,
         private ?Gift $gift = null,
         private ?int $premiumSubscriptionDuration = null
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getTransactionType(): string
    {
        return $this->transactionType;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @return AffiliateInfo|null
     */
    public function getAffiliate(): ?AffiliateInfo
    {
        return $this->affiliate;
    }

    /**
     * @return string|null
     */
    public function getInvoicePayload(): ?string
    {
        return $this->invoicePayload;
    }

    /**
     * @return int|null
     */
    public function getSubscriptionPeriod(): ?int
    {
        return $this->subscriptionPeriod;
    }

    /**
     * @return PaidMedia[]|null
     */
    public function getPaidMedia(): ?array
    {
        return $this->paidMedia;
    }

    /**
     * @return string|null
     */
    public function getPaidMediaPayload(): ?string
    {
        return $this->paidMediaPayload;
    }

    /**
     * @return Gift|null
     */
    public function getGift(): ?Gift
    {
        return $this->gift;
    }

    /**
     * @return int|null
     */
    public function getPremiumSubscriptionDuration(): ?int
    {
        return $this->premiumSubscriptionDuration;
    }
}
