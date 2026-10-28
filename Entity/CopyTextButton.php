<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents an inline keyboard button that copies specified text to the clipboard.
 *
 * @see https://core.telegram.org/bots/api#copytextbutton
 */
final class CopyTextButton
{
    /**
     * @param string $text The text to be copied to the clipboard; 1-256 characters
    */
    public function __construct
    (
         private string $text
    ) {}
    
    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }
}
