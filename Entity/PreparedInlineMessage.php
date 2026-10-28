<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes an inline message to be sent by a user of a Mini App.
 *
 * @see https://core.telegram.org/bots/api#preparedinlinemessage
 */
final class PreparedInlineMessage
{
    /**
     * @param string $id Unique identifier of the prepared message
     * @param int $expirationDate Expiration date of the prepared message, in Unix time. Expired prepared messages can no longer be used.
    */
    public function __construct
    (
         private string $id,
         private int $expirationDate
    ) {}
    
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getExpirationDate(): int
    {
        return $this->expirationDate;
    }
}
