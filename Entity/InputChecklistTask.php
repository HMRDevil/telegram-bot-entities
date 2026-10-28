<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a task to add to a checklist.
 *
 * @see https://core.telegram.org/bots/api#inputchecklisttask
 */
final class InputChecklistTask
{
    /**
     * @param int $id Unique identifier of the task; must be positive and unique among all task identifiers currently present in the checklist
     * @param string $text Text of the task; 1-100 characters after entities parsing
     * @param string|null $parseMode Optional. Mode for parsing entities in the text. See formatting options for more details.
     * @param MessageEntity[]|null $textEntities Optional. List of special entities that appear in the text, which can be specified instead of parse_mode. Currently, only bold, italic, underline, strikethrough, spoiler, custom_emoji, and date_time entities are allowed.
    */
    public function __construct
    (
         private int $id,
         private string $text,
         private ?string $parseMode = null,
         private ?array $textEntities = null
    ) {}
    
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return string|null
     */
    public function getParseMode(): ?string
    {
        return $this->parseMode;
    }

    /**
     * @return MessageEntity[]|null
     */
    public function getTextEntities(): ?array
    {
        return $this->textEntities;
    }
}
