<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Represents an issue with a document scan. The error is considered resolved when the file with the document scan changes.
 *
 * @see https://core.telegram.org/bots/api#passportelementerrorfile
 */
final class PassportElementErrorFile
{
    /**
     * @param string $source Error source, must be file
     * @param string $type The section of the user's Telegram Passport which has the issue, one of "utility_bill", "bank_statement", "rental_agreement", "passport_registration", "temporary_registration"
     * @param string $fileHash Base64-encoded file hash
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
