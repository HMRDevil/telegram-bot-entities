<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A button.
 *
 * @see https://core.telegram.org/bots/api#richtextbutton
 */
final class RichTextButton
{
    /**
     * @var string $type Type of the rich text, always “button”
     */
    private string $type = 'button';

    /**
     * @param RichMessageButton $button The button
    */
    public function __construct
    (
         private RichMessageButton $button
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return RichMessageButton
     */
    public function getButton(): RichMessageButton
    {
        return $this->button;
    }
}
