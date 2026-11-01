<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Represents the content of a rich message to be sent as the result of an inline query.
 *
 * @see https://core.telegram.org/bots/api#inputrichmessagecontent
 */
final class InputRichMessageContent
{
    /**
     * @param InputRichMessage $richMessage The message to be sent. Only previously uploaded files may be used in the message.
    */
    public function __construct
    (
         private InputRichMessage $richMessage
    ) {}
    
    /**
     * @return InputRichMessage
     */
    public function getRichMessage(): InputRichMessage
    {
        return $this->richMessage;
    }
}
