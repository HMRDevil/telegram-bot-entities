<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes an inline message sent by a guest bot.
 *
 * @see https://core.telegram.org/bots/api#sentguestmessage
 */
final class SentGuestMessage
{
    /**
     * @param string $inlineMessageId Identifier of the sent inline message
    */
    public function __construct
    (
         private string $inlineMessageId
    ) {}
    
    /**
     * @return string
     */
    public function getInlineMessageId(): string
    {
        return $this->inlineMessageId;
    }
}
