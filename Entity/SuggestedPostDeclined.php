<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a service message about the rejection of a suggested post.
 *
 * @see https://core.telegram.org/bots/api#suggestedpostdeclined
 */
final class SuggestedPostDeclined
{
    /**
     * @param Message|null $suggestedPostMessage Optional. Message containing the suggested post. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
     * @param string|null $comment Optional. Comment with which the post was declined
    */
    public function __construct
    (
         private ?Message $suggestedPostMessage = null,
         private ?string $comment = null
    ) {}
    
    /**
     * @return Message|null
     */
    public function getSuggestedPostMessage(): ?Message
    {
        return $this->suggestedPostMessage;
    }

    /**
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
}
