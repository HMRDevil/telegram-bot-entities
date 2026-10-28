<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object contains information about one answer option in a poll.
 *
 * @see https://core.telegram.org/bots/api#polloption
 */
final class PollOption
{
    /**
     * @param string $persistentId Unique identifier of the option, persistent on option addition and deletion
     * @param string $text Option text, 1-100 characters
     * @param int $voterCount Number of users who voted for this option; may be 0 if unknown
     * @param MessageEntity[]|null $textEntities Optional. Special entities that appear in the option text. Currently, only custom emoji entities are allowed in poll option texts
     * @param PollMedia|null $media Optional. Media added to the poll option
     * @param User|null $addedByUser Optional. User who added the option; omitted if the option wasn't added by a user after poll creation
     * @param Chat|null $addedByChat Optional. Chat that added the option; omitted if the option wasn't added by a chat after poll creation
     * @param int|null $additionDate Optional. Point in time (Unix timestamp) when the option was added; omitted if the option existed in the original poll
    */
    public function __construct
    (
         private string $persistentId,
         private string $text,
         private int $voterCount,
         private ?array $textEntities = null,
         private ?PollMedia $media = null,
         private ?User $addedByUser = null,
         private ?Chat $addedByChat = null,
         private ?int $additionDate = null
    ) {}
    
    /**
     * @return string
     */
    public function getPersistentId(): string
    {
        return $this->persistentId;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return int
     */
    public function getVoterCount(): int
    {
        return $this->voterCount;
    }

    /**
     * @return MessageEntity[]|null
     */
    public function getTextEntities(): ?array
    {
        return $this->textEntities;
    }

    /**
     * @return PollMedia|null
     */
    public function getMedia(): ?PollMedia
    {
        return $this->media;
    }

    /**
     * @return User|null
     */
    public function getAddedByUser(): ?User
    {
        return $this->addedByUser;
    }

    /**
     * @return Chat|null
     */
    public function getAddedByChat(): ?Chat
    {
        return $this->addedByChat;
    }

    /**
     * @return int|null
     */
    public function getAdditionDate(): ?int
    {
        return $this->additionDate;
    }
}
