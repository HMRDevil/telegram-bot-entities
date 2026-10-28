<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Represents an issue with the translated version of a document. The error is considered resolved when a file with the document translation change.
 *
 * @see https://core.telegram.org/bots/api#passportelementerrortranslationfiles
 */
final class PassportElementErrorTranslationFiles
{
    /**
     * @param string $source Error source, must be translation_files
     * @param string $type Type of element of the user's Telegram Passport which has the issue, one of "passport", "driver_license", "identity_card", "internal_passport", "utility_bill", "bank_statement", "rental_agreement", "passport_registration", "temporary_registration"
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
