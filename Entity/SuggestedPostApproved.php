<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a service message about the approval of a suggested post.
 *
 * @see https://core.telegram.org/bots/api#suggestedpostapproved
 */
final class SuggestedPostApproved
{
    /**
     * @param int $sendDate Date when the post will be published
     * @param Message|null $suggestedPostMessage Optional. Message containing the suggested post. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
     * @param SuggestedPostPrice|null $price Optional. Amount paid for the post
    */
    public function __construct
    (
         private int $sendDate,
         private ?Message $suggestedPostMessage = null,
         private ?SuggestedPostPrice $price = null
    ) {}
    
    /**
     * @return int
     */
    public function getSendDate(): int
    {
        return $this->sendDate;
    }

    /**
     * @return Message|null
     */
    public function getSuggestedPostMessage(): ?Message
    {
        return $this->suggestedPostMessage;
    }

    /**
     * @return SuggestedPostPrice|null
     */
    public function getPrice(): ?SuggestedPostPrice
    {
        return $this->price;
    }
}
