<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a service message about an option deleted from a poll.
 *
 * @see https://core.telegram.org/bots/api#polloptiondeleted
 */
final class PollOptionDeleted
{
    /**
     * @param string $optionPersistentId Unique identifier of the deleted option
     * @param string $optionText Option text
     * @param MaybeInaccessibleMessage|null $pollMessage Optional. Message containing the poll from which the option was deleted, if known. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
     * @param MessageEntity[]|null $optionTextEntities Optional. Special entities that appear in the option_text
    */
    public function __construct
    (
         private string $optionPersistentId,
         private string $optionText,
         private ?MaybeInaccessibleMessage $pollMessage = null,
         private ?array $optionTextEntities = null
    ) {}
    
    /**
     * @return string
     */
    public function getOptionPersistentId(): string
    {
        return $this->optionPersistentId;
    }

    /**
     * @return string
     */
    public function getOptionText(): string
    {
        return $this->optionText;
    }

    /**
     * @return MaybeInaccessibleMessage|null
     */
    public function getPollMessage(): ?MaybeInaccessibleMessage
    {
        return $this->pollMessage;
    }

    /**
     * @return MessageEntity[]|null
     */
    public function getOptionTextEntities(): ?array
    {
        return $this->optionTextEntities;
    }
}
