<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents a change of a reaction on a message performed by a user.
 *
 * @see https://core.telegram.org/bots/api#messagereactionupdated
 */
final class MessageReactionUpdated
{
    /**
     * @param Chat $chat The chat containing the message the user reacted to
     * @param int $messageId Unique identifier of the message inside the chat
     * @param int $date Date of the change in Unix time
     * @param ReactionType[] $oldReaction Previous list of reaction types that were set by the user
     * @param ReactionType[] $newReaction New list of reaction types that have been set by the user
     * @param User|null $user Optional. The user that changed the reaction, if the user isn't anonymous
     * @param Chat|null $actorChat Optional. The chat on behalf of which the reaction was changed, if the user is anonymous
    */
    public function __construct
    (
         private Chat $chat,
         private int $messageId,
         private int $date,
         private array $oldReaction,
         private array $newReaction,
         private ?User $user = null,
         private ?Chat $actorChat = null
    ) {}
    
    /**
     * @return Chat
     */
    public function getChat(): Chat
    {
        return $this->chat;
    }

    /**
     * @return int
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * @return int
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * @return ReactionType[]
     */
    public function getOldReaction(): array
    {
        return $this->oldReaction;
    }

    /**
     * @return ReactionType[]
     */
    public function getNewReaction(): array
    {
        return $this->newReaction;
    }

    /**
     * @return User|null
     */
    public function getUser(): ?User
    {
        return $this->user;
    }

    /**
     * @return Chat|null
     */
    public function getActorChat(): ?Chat
    {
        return $this->actorChat;
    }
}
