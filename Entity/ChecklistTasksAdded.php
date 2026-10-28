<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a service message about tasks added to a checklist.
 *
 * @see https://core.telegram.org/bots/api#checklisttasksadded
 */
final class ChecklistTasksAdded
{
    /**
     * @param ChecklistTask[] $tasks List of tasks added to the checklist
     * @param Message|null $checklistMessage Optional. Message containing the checklist to which the tasks were added. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
    */
    public function __construct
    (
         private array $tasks,
         private ?Message $checklistMessage = null
    ) {}
    
    /**
     * @return ChecklistTask[]
     */
    public function getTasks(): array
    {
        return $this->tasks;
    }

    /**
     * @return Message|null
     */
    public function getChecklistMessage(): ?Message
    {
        return $this->checklistMessage;
    }
}
