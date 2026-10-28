<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a service message about checklist tasks marked as done or not done.
 *
 * @see https://core.telegram.org/bots/api#checklisttasksdone
 */
final class ChecklistTasksDone
{
    /**
     * @param Message|null $checklistMessage Optional. Message containing the checklist whose tasks were marked as done or not done. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
     * @param Integer[]|null $markedAsDoneTaskIds Optional. Identifiers of the tasks that were marked as done
     * @param Integer[]|null $markedAsNotDoneTaskIds Optional. Identifiers of the tasks that were marked as not done
    */
    public function __construct
    (
         private ?Message $checklistMessage = null,
         private ?array $markedAsDoneTaskIds = null,
         private ?array $markedAsNotDoneTaskIds = null
    ) {}
    
    /**
     * @return Message|null
     */
    public function getChecklistMessage(): ?Message
    {
        return $this->checklistMessage;
    }

    /**
     * @return Integer[]|null
     */
    public function getMarkedAsDoneTaskIds(): ?array
    {
        return $this->markedAsDoneTaskIds;
    }

    /**
     * @return Integer[]|null
     */
    public function getMarkedAsNotDoneTaskIds(): ?array
    {
        return $this->markedAsNotDoneTaskIds;
    }
}
