<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Represents an issue in one of the data fields that was provided by the user. The error is considered resolved when the field's value changes.
 *
 * @see https://core.telegram.org/bots/api#passportelementerrordatafield
 */
final class PassportElementErrorDataField
{
    /**
     * @param string $source Error source, must be data
     * @param string $type The section of the user's Telegram Passport which has the error, one of "personal_details", "passport", "driver_license", "identity_card", "internal_passport", "address"
     * @param string $fieldName Name of the data field which has the error
     * @param string $dataHash Base64-encoded data hash
     * @param string $message Error message
    */
    public function __construct
    (
         private string $source,
         private string $type,
         private string $fieldName,
         private string $dataHash,
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
    public function getFieldName(): string
    {
        return $this->fieldName;
    }

    /**
     * @return string
     */
    public function getDataHash(): string
    {
        return $this->dataHash;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}
