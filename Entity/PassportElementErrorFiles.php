<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Represents an issue with a list of scans. The error is considered resolved when the list of files containing the scans changes.
 *
 * @see https://core.telegram.org/bots/api#passportelementerrorfiles
 */
final class PassportElementErrorFiles
{
    /**
     * @param string $source Error source, must be files
     * @param string $type The section of the user's Telegram Passport which has the issue, one of "utility_bill", "bank_statement", "rental_agreement", "passport_registration", "temporary_registration"
     * @param String[] $fileHashes List of base64-encoded file hashes
     * @param string $message Error message
    */
    public function __construct
    (
         private string $source,
         private string $type,
         private array $fileHashes,
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
     * @return String[]
     */
    public function getFileHashes(): array
    {
        return $this->fileHashes;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}
