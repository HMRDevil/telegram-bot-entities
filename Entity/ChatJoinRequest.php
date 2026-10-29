<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Represents a join request sent to a chat.
 *
 * @see https://core.telegram.org/bots/api#chatjoinrequest
 */
final class ChatJoinRequest
{
    /**
     * @param Chat $chat Chat to which the request was sent
     * @param User $from User that sent the join request
     * @param int $userChatId Identifier of a private chat with the user who sent the join request. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. The bot can use this identifier for 5 minutes to send messages until the join request is processed, assuming no other administrator contacted the user.
     * @param int $date Date the request was sent in Unix time
     * @param string|null $bio Optional. Bio of the user
     * @param ChatInviteLink|null $inviteLink Optional. Chat invite link that was used by the user to send the join request
     * @param string|null $queryId Optional. Identifier of the join request query; for bots assigned to process join request only. If present, then the bot must call sendChatJoinRequestWebApp or directly call answerChatJoinRequestQuery within 10 seconds.
    */
    public function __construct
    (
         private Chat $chat,
         private User $from,
         private int $userChatId,
         private int $date,
         private ?string $bio = null,
         private ?ChatInviteLink $inviteLink = null,
         private ?string $queryId = null
    ) {}
    
    /**
     * @return Chat
     */
    public function getChat(): Chat
    {
        return $this->chat;
    }

    /**
     * @return User
     */
    public function getFrom(): User
    {
        return $this->from;
    }

    /**
     * @return int
     */
    public function getUserChatId(): int
    {
        return $this->userChatId;
    }

    /**
     * @return int
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * @return string|null
     */
    public function getBio(): ?string
    {
        return $this->bio;
    }

    /**
     * @return ChatInviteLink|null
     */
    public function getInviteLink(): ?ChatInviteLink
    {
        return $this->inviteLink;
    }

    /**
     * @return string|null
     */
    public function getQueryId(): ?string
    {
        return $this->queryId;
    }
}
