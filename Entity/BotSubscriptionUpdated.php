<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object contains information about changes to a user payment subscription toward the current bot.
 *
 * @see https://core.telegram.org/bots/api#botsubscriptionupdated
 */
final class BotSubscriptionUpdated
{
    /**
     * @param User $user User who subscribed for payments toward the bot
     * @param string $invoicePayload Bot-specified invoice payload
     * @param string $state The new state of the subscription. Currently, it can be one of "canceled" if the user canceled the subscription, "active" if the user re-enabled a previously canceled subscription, or "failed" if payment for the subscription failed.
    */
    public function __construct
    (
         private User $user,
         private string $invoicePayload,
         private string $state
    ) {}
    
    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
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
    public function getState(): string
    {
        return $this->state;
    }
}
