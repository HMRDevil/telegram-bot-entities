<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object defines the parameters for the creation of a managed bot. Information about the created bot will be shared with the bot using the update managed_bot and a Message with the field managed_bot_created.
 *
 * @see https://core.telegram.org/bots/api#keyboardbuttonrequestmanagedbot
 */
final class KeyboardButtonRequestManagedBot
{
    /**
     * @param int $requestId Signed 32-bit identifier of the request. Must be unique within the message.
     * @param string|null $suggestedName Optional. Suggested name for the bot
     * @param string|null $suggestedUsername Optional. Suggested username for the bot
    */
    public function __construct
    (
         private int $requestId,
         private ?string $suggestedName = null,
         private ?string $suggestedUsername = null
    ) {}
    
    /**
     * @return int
     */
    public function getRequestId(): int
    {
        return $this->requestId;
    }

    /**
     * @return string|null
     */
    public function getSuggestedName(): ?string
    {
        return $this->suggestedName;
    }

    /**
     * @return string|null
     */
    public function getSuggestedUsername(): ?string
    {
        return $this->suggestedUsername;
    }
}
