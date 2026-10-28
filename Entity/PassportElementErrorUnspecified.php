<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Represents an issue in an unspecified place. The error is considered resolved when new data is added.
 *
 * @see https://core.telegram.org/bots/api#passportelementerrorunspecified
 */
final class PassportElementErrorUnspecified
{
    /**
     * @param string $source Error source, must be unspecified
     * @param string $type Type of element of the user's Telegram Passport which has the issue
     * @param string $elementHash Base64-encoded element hash
     * @param string $message Error message
    */
    public function __construct
    (
         private string $source,
         private string $type,
         private string $elementHash,
         private string $message
    ) {}
    
    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getElementHash(): string
    {
        return $this->elementHash;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}
