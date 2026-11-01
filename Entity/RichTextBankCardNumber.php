<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A text with a bank card number.
 *
 * @see https://core.telegram.org/bots/api#richtextbankcardnumber
 */
final class RichTextBankCardNumber
{
    /**
     * @param string $type Type of the rich text, always "bank_card_number"
     * @param RichText $text The text
     * @param string $bankCardNumber The bank card number
    */
    public function __construct
    (
         private string $type,
         private RichText $text,
         private string $bankCardNumber
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
    public function getBankCardNumber(): string
    {
        return $this->bankCardNumber;
    }
}
