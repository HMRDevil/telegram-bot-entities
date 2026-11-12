<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A text with an email address.
 *
 * @see https://core.telegram.org/bots/api#richtextemailaddress
 */
final class RichTextEmailAddress
{
    /**
     * @var string $type Type of the rich text, always “email_address”
     */
    private string $type = 'email_address';

    /**
     * @param RichText $text The text
     * @param string $emailAddress The email address
    */
    public function __construct
    (
         private RichText $text,
         private string $emailAddress
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
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }
}
