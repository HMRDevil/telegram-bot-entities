<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a keyboard button to be used by a user of a Mini App.
 *
 * @see https://core.telegram.org/bots/api#preparedkeyboardbutton
 */
final class PreparedKeyboardButton
{
    /**
     * @param string $id Unique identifier of the keyboard button
    */
    public function __construct
    (
         private string $id
    ) {}
    
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
}
