<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a service message about the failed approval of a suggested post. Currently, only caused by insufficient user funds at the time of approval.
 *
 * @see https://core.telegram.org/bots/api#suggestedpostapprovalfailed
 */
final class SuggestedPostApprovalFailed
{
    /**
     * @param SuggestedPostPrice $price Expected price of the post
     * @param Message|null $suggestedPostMessage Optional. Message containing the suggested post whose approval has failed. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
    */
    public function __construct
    (
         private SuggestedPostPrice $price,
         private ?Message $suggestedPostMessage = null
    ) {}
    
    /**
     * @return SuggestedPostPrice
     */
    public function getPrice(): SuggestedPostPrice
    {
        return $this->price;
    }

    /**
     * @return Message|null
     */
    public function getSuggestedPostMessage(): ?Message
    {
        return $this->suggestedPostMessage;
    }
}
