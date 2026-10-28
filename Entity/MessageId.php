<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents a unique message identifier.
 *
 * @see https://core.telegram.org/bots/api#messageid
 */
final class MessageId
{
    /**
     * @param int $messageId Unique message identifier. In specific instances (e.g., message containing a video sent to a big chat), the server might automatically schedule a message instead of sending it immediately. In such cases, this field will be 0 and the relevant message will be unusable until it is actually sent.
    */
    public function __construct
    (
         private int $messageId
    ) {}
    
    /**
     * @return int
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }
}
