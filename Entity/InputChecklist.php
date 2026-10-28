<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a checklist to create.
 *
 * @see https://core.telegram.org/bots/api#inputchecklist
 */
final class InputChecklist
{
    /**
     * @param string $title Title of the checklist; 1-255 characters after entities parsing
     * @param InputChecklistTask[] $tasks List of 1-30 tasks in the checklist
     * @param string|null $parseMode Optional. Mode for parsing entities in the title. See formatting options for more details.
     * @param MessageEntity[]|null $titleEntities Optional. List of special entities that appear in the title, which can be specified instead of parse_mode. Currently, only bold, italic, underline, strikethrough, spoiler, custom_emoji, and date_time entities are allowed.
     * @param bool|null $othersCanAddTasks Optional. Pass True if other users can add tasks to the checklist
     * @param bool|null $othersCanMarkTasksAsDone Optional. Pass True if other users can mark tasks as done or not done in the checklist
    */
    public function __construct
    (
         private string $title,
         private array $tasks,
         private ?string $parseMode = null,
         private ?array $titleEntities = null,
         private ?bool $othersCanAddTasks = null,
         private ?bool $othersCanMarkTasksAsDone = null
    ) {}
    
    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return InputChecklistTask[]
     */
    public function getTasks(): array
    {
        return $this->tasks;
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
    public function getTitleEntities(): ?array
    {
        return $this->titleEntities;
    }

    /**
     * @return bool|null
     */
    public function getOthersCanAddTasks(): ?bool
    {
        return $this->othersCanAddTasks;
    }

    /**
     * @return bool|null
     */
    public function getOthersCanMarkTasksAsDone(): ?bool
    {
        return $this->othersCanMarkTasksAsDone;
    }
}
