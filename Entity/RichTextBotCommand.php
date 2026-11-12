<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A bot command.
 *
 * @see https://core.telegram.org/bots/api#richtextbotcommand
 */
final class RichTextBotCommand
{
    /**
     * @var string $type Type of the rich text, always “bot_command”
     */
    private string $type = 'bot_command';

    /**
     * @param RichText $text The text
     * @param string $botCommand The bot command
    */
    public function __construct
    (
         private RichText $text,
         private string $botCommand
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
    public function getBotCommand(): string
    {
        return $this->botCommand;
    }
}
