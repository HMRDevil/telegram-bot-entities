<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a topic of a direct messages chat.
 *
 * @see https://core.telegram.org/bots/api#directmessagestopic
 */
final class DirectMessagesTopic
{
    /**
     * @param int $topicId Unique identifier of the topic. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param User|null $user Optional. Information about the user that created the topic. Currently, it is always present.
    */
    public function __construct
    (
         private int $topicId,
         private ?User $user = null
    ) {}
    
    /**
     * @return int
     */
    public function getTopicId(): int
    {
        return $this->topicId;
    }

    /**
     * @return User|null
     */
    public function getUser(): ?User
    {
        return $this->user;
    }
}
