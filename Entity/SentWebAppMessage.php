<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes an inline message sent by a Web App on behalf of a user.
 *
 * @see https://core.telegram.org/bots/api#sentwebappmessage
 */
final class SentWebAppMessage
{
    /**
     * @param string|null $inlineMessageId Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message.
    */
    public function __construct
    (
         private ?string $inlineMessageId = null
    ) {}
    
    /**
     * @return string|null
     */
    public function getInlineMessageId(): ?string
    {
        return $this->inlineMessageId;
    }
}
