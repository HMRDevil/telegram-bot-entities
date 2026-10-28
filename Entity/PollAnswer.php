<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents an answer of a user in a non-anonymous poll.
 *
 * @see https://core.telegram.org/bots/api#pollanswer
 */
final class PollAnswer
{
    /**
     * @param string $pollId Unique poll identifier
     * @param Integer[] $optionIds 0-based identifiers of chosen answer options. May be empty if the vote was retracted.
     * @param String[] $optionPersistentIds Persistent identifiers of the chosen answer options. May be empty if the vote was retracted.
     * @param Chat|null $voterChat Optional. The chat that changed the answer to the poll, if the voter is anonymous
     * @param User|null $user Optional. The user that changed the answer to the poll, if the voter isn't anonymous
    */
    public function __construct
    (
         private string $pollId,
         private array $optionIds,
         private array $optionPersistentIds,
         private ?Chat $voterChat = null,
         private ?User $user = null
    ) {}
    
    /**
     * @return string
     */
    public function getPollId(): string
    {
        return $this->pollId;
    }

    /**
     * @return Integer[]
     */
    public function getOptionIds(): array
    {
        return $this->optionIds;
    }

    /**
     * @return String[]
     */
    public function getOptionPersistentIds(): array
    {
        return $this->optionPersistentIds;
    }

    /**
     * @return Chat|null
     */
    public function getVoterChat(): ?Chat
    {
        return $this->voterChat;
    }

    /**
     * @return User|null
     */
    public function getUser(): ?User
    {
        return $this->user;
    }
}
