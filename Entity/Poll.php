<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object contains information about a poll.
 *
 * @see https://core.telegram.org/bots/api#poll
 */
final class Poll
{
    /**
     * @param string $id Unique poll identifier
     * @param string $question Poll question, 1-300 characters
     * @param PollOption[] $options List of poll options
     * @param int $totalVoterCount Total number of users that voted in the poll
     * @param bool $isClosed True, if the poll is closed
     * @param bool $isAnonymous True, if the poll is anonymous
     * @param string $type Poll type, currently can be "regular" or "quiz"
     * @param bool $allowsMultipleAnswers True, if the poll allows multiple answers
     * @param bool $allowsRevoting True, if the poll allows to change the chosen answer options
     * @param bool $membersOnly True if voting is limited to users who have been members of the chat where the poll was originally sent for more than 24 hours
     * @param MessageEntity[]|null $questionEntities Optional. Special entities that appear in the question. Currently, only custom emoji entities are allowed in poll questions
     * @param String[]|null $countryCodes Optional. A list of two-letter ISO 3166-1 alpha-2 country codes indicating the countries from which users can vote in the poll. The country code "FT" is used for users with anonymous numbers. If omitted, then users from any country can participate in the poll.
     * @param Integer[]|null $correctOptionIds Optional. Array of 0-based identifiers of the correct answer options. Available only for polls in quiz mode which are closed or were sent (not forwarded) by the bot or to the private chat with the bot.
     * @param string|null $explanation Optional. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters
     * @param MessageEntity[]|null $explanationEntities Optional. Special entities like usernames, URLs, bot commands, etc. that appear in the explanation
     * @param PollMedia|null $explanationMedia Optional. Media added to the quiz explanation
     * @param int|null $openPeriod Optional. Amount of time in seconds the poll will be active after creation
     * @param int|null $closeDate Optional. Point in time (Unix timestamp) when the poll will be automatically closed
     * @param string|null $description Optional. Description of the poll; for polls inside the Message object only
     * @param MessageEntity[]|null $descriptionEntities Optional. Special entities like usernames, URLs, bot commands, etc. that appear in the description
     * @param PollMedia|null $media Optional. Media added to the poll description; for polls inside the Message object only
    */
    public function __construct
    (
         private string $id,
         private string $question,
         private array $options,
         private int $totalVoterCount,
         private bool $isClosed,
         private bool $isAnonymous,
         private string $type,
         private bool $allowsMultipleAnswers,
         private bool $allowsRevoting,
         private bool $membersOnly,
         private ?array $questionEntities = null,
         private ?array $countryCodes = null,
         private ?array $correctOptionIds = null,
         private ?string $explanation = null,
         private ?array $explanationEntities = null,
         private ?PollMedia $explanationMedia = null,
         private ?int $openPeriod = null,
         private ?int $closeDate = null,
         private ?string $description = null,
         private ?array $descriptionEntities = null,
         private ?PollMedia $media = null
    ) {}
    
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getQuestion(): string
    {
        return $this->question;
    }

    /**
     * @return PollOption[]
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * @return int
     */
    public function getTotalVoterCount(): int
    {
        return $this->totalVoterCount;
    }

    /**
     * @return bool
     */
    public function getIsClosed(): bool
    {
        return $this->isClosed;
    }

    /**
     * @return bool
     */
    public function getIsAnonymous(): bool
    {
        return $this->isAnonymous;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return bool
     */
    public function getAllowsMultipleAnswers(): bool
    {
        return $this->allowsMultipleAnswers;
    }

    /**
     * @return bool
     */
    public function getAllowsRevoting(): bool
    {
        return $this->allowsRevoting;
    }

    /**
     * @return bool
     */
    public function getMembersOnly(): bool
    {
        return $this->membersOnly;
    }

    /**
     * @return MessageEntity[]|null
     */
    public function getQuestionEntities(): ?array
    {
        return $this->questionEntities;
    }

    /**
     * @return String[]|null
     */
    public function getCountryCodes(): ?array
    {
        return $this->countryCodes;
    }

    /**
     * @return Integer[]|null
     */
    public function getCorrectOptionIds(): ?array
    {
        return $this->correctOptionIds;
    }

    /**
     * @return string|null
     */
    public function getExplanation(): ?string
    {
        return $this->explanation;
    }

    /**
     * @return MessageEntity[]|null
     */
    public function getExplanationEntities(): ?array
    {
        return $this->explanationEntities;
    }

    /**
     * @return PollMedia|null
     */
    public function getExplanationMedia(): ?PollMedia
    {
        return $this->explanationMedia;
    }

    /**
     * @return int|null
     */
    public function getOpenPeriod(): ?int
    {
        return $this->openPeriod;
    }

    /**
     * @return int|null
     */
    public function getCloseDate(): ?int
    {
        return $this->closeDate;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return MessageEntity[]|null
     */
    public function getDescriptionEntities(): ?array
    {
        return $this->descriptionEntities;
    }

    /**
     * @return PollMedia|null
     */
    public function getMedia(): ?PollMedia
    {
        return $this->media;
    }
}
