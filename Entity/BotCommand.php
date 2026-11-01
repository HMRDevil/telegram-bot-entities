<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents a bot command.
 *
 * @see https://core.telegram.org/bots/api#botcommand
 */
final class BotCommand
{
    /**
     * @param string $command Text of the command; 1-32 characters. Can contain only lowercase English letters, digits and underscores.
     * @param string $description Description of the command; 1-256 characters
     * @param bool|null $isEphemeral Optional. True, if the command sends an ephemeral message, which can be seen only by the sender of the message and the bot
    */
    public function __construct
    (
         private string $command,
         private string $description,
         private ?bool $isEphemeral = null
    ) {}
    
    /**
     * @return string
     */
    public function getCommand(): string
    {
        return $this->command;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return bool|null
     */
    public function getIsEphemeral(): ?bool
    {
        return $this->isEphemeral;
    }
}
