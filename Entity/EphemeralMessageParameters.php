<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * 
 *
 * @see https://core.telegram.org/bots/api#ephemeralmessageparameters
 */
final class EphemeralMessageParameters
{
    /**
     * @param int $receiverUserId Identifier of the user who will receive the message. It is not guaranteed that the user will receive the message, especially if they are offline. See here for more details.
     * @param string|null $callbackQueryId Optional. Identifier of the callback query which triggered the message, if any
     * @param bool|null $replaceCallbackQueryMessage Optional. Pass True if the ephemeral message must be shown in place of the original message. Must be False for callback queries from ephemeral messages, which must be edited using regular editEphemeralMessage... methods.
    */
    public function __construct
    (
         private int $receiverUserId,
         private ?string $callbackQueryId = null,
         private ?bool $replaceCallbackQueryMessage = null
    ) {}
    
    /**
     * @return int
     */
    public function getReceiverUserId(): int
    {
        return $this->receiverUserId;
    }

    /**
     * @return string|null
     */
    public function getCallbackQueryId(): ?string
    {
        return $this->callbackQueryId;
    }

    /**
     * @return bool|null
     */
    public function getReplaceCallbackQueryMessage(): ?bool
    {
        return $this->replaceCallbackQueryMessage;
    }
}
