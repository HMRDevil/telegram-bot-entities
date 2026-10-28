<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a checklist.
 *
 * @see https://core.telegram.org/bots/api#checklist
 */
final class Checklist
{
    /**
     * @param string $title Title of the checklist
     * @param ChecklistTask[] $tasks List of tasks in the checklist
     * @param MessageEntity[]|null $titleEntities Optional. Special entities that appear in the checklist title
     * @param bool|null $othersCanAddTasks Optional. True, if users other than the creator of the list can add tasks to the list
     * @param bool|null $othersCanMarkTasksAsDone Optional. True, if users other than the creator of the list can mark tasks as done or not done
    */
    public function __construct
    (
         private string $title,
         private array $tasks,
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
     * @return ChecklistTask[]
     */
    public function getTasks(): array
    {
        return $this->tasks;
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
