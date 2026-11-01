<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A text with a phone number.
 *
 * @see https://core.telegram.org/bots/api#richtextphonenumber
 */
final class RichTextPhoneNumber
{
    /**
     * @param string $type Type of the rich text, always "phone_number"
     * @param RichText $text The text
     * @param string $phoneNumber The phone number
    */
    public function __construct
    (
         private string $type,
         private RichText $text,
         private string $phoneNumber
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return RichText
     */
    public function getText(): RichText
    {
        return $this->text;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }
}
