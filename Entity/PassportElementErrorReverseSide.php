<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Represents an issue with the reverse side of a document. The error is considered resolved when the file with reverse side of the document changes.
 *
 * @see https://core.telegram.org/bots/api#passportelementerrorreverseside
 */
final class PassportElementErrorReverseSide
{
    /**
     * @param string $source Error source, must be reverse_side
     * @param string $type The section of the user's Telegram Passport which has the issue, one of "driver_license", "identity_card"
     * @param string $fileHash Base64-encoded hash of the file with the reverse side of the document
     * @param string $message Error message
    */
    public function __construct
    (
         private string $source,
         private string $type,
         private string $fileHash,
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
    public function getFileHash(): string
    {
        return $this->fileHash;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}
