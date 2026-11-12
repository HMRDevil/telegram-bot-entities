<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes that no specific value for the menu button was set.
 *
 * @see https://core.telegram.org/bots/api#menubuttondefault
 */
final class MenuButtonDefault
{
    /**
     * @var string $type Type of the button, must be default
     */
    private string $type = 'default';

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}
