<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents type of a poll, which is allowed to be created and sent when the corresponding button is pressed.
 *
 * @see https://core.telegram.org/bots/api#keyboardbuttonpolltype
 */
final class KeyboardButtonPollType
{
    /**
     * @param string|null $type Optional. If quiz is passed, the user will be allowed to create only polls in the quiz mode. If regular is passed, only regular polls will be allowed. Otherwise, the user will be allowed to create a poll of any type.
    */
    public function __construct
    (
         private ?string $type = null
    ) {}
    
    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
}
