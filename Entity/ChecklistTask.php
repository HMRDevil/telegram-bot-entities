<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a task in a checklist.
 *
 * @see https://core.telegram.org/bots/api#checklisttask
 */
final class ChecklistTask
{
    /**
     * @param int $id Unique identifier of the task
     * @param string $text Text of the task
     * @param MessageEntity[]|null $textEntities Optional. Special entities that appear in the task text
     * @param User|null $completedByUser Optional. User that completed the task; omitted if the task wasn't completed by a user
     * @param Chat|null $completedByChat Optional. Chat that completed the task; omitted if the task wasn't completed by a chat
     * @param int|null $completionDate Optional. Point in time (Unix timestamp) when the task was completed; 0 if the task wasn't completed
    */
    public function __construct
    (
         private int $id,
         private string $text,
         private ?array $textEntities = null,
         private ?User $completedByUser = null,
         private ?Chat $completedByChat = null,
         private ?int $completionDate = null
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
     * @return MessageEntity[]|null
     */
    public function getTextEntities(): ?array
    {
        return $this->textEntities;
    }

    /**
     * @return User|null
     */
    public function getCompletedByUser(): ?User
    {
        return $this->completedByUser;
    }

    /**
     * @return Chat|null
     */
    public function getCompletedByChat(): ?Chat
    {
        return $this->completedByChat;
    }

    /**
     * @return int|null
     */
    public function getCompletionDate(): ?int
    {
        return $this->completionDate;
    }
}
