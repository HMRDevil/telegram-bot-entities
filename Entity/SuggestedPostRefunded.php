<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a service message about a payment refund for a suggested post.
 *
 * @see https://core.telegram.org/bots/api#suggestedpostrefunded
 */
final class SuggestedPostRefunded
{
    /**
     * @param string $reason Reason for the refund. Currently, one of "post_deleted" if the post was deleted within 24 hours of being posted or removed from scheduled messages without being posted, or "payment_refunded" if the payer refunded their payment.
     * @param Message|null $suggestedPostMessage Optional. Message containing the suggested post. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
    */
    public function __construct
    (
         private string $reason,
         private ?Message $suggestedPostMessage = null
    ) {}
    
    /**
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * @return Message|null
     */
    public function getSuggestedPostMessage(): ?Message
    {
        return $this->suggestedPostMessage;
    }
}
