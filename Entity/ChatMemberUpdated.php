<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents changes in the status of a chat member.
 *
 * @see https://core.telegram.org/bots/api#chatmemberupdated
 */
final class ChatMemberUpdated
{
    /**
     * @param Chat $chat Chat the user belongs to
     * @param User $from Performer of the action, which resulted in the change
     * @param int $date Date the change was done in Unix time
     * @param ChatMember $oldChatMember Previous information about the chat member
     * @param ChatMember $newChatMember New information about the chat member
     * @param ChatInviteLink|null $inviteLink Optional. Chat invite link, which was used by the user to join the chat; for joining by invite link events only
     * @param bool|null $viaJoinRequest Optional. True, if the user joined the chat after sending a direct join request without using an invite link and being approved by an administrator
     * @param bool|null $viaChatFolderInviteLink Optional. True, if the user joined the chat via a chat folder invite link
    */
    public function __construct
    (
         private Chat $chat,
         private User $from,
         private int $date,
         private ChatMember $oldChatMember,
         private ChatMember $newChatMember,
         private ?ChatInviteLink $inviteLink = null,
         private ?bool $viaJoinRequest = null,
         private ?bool $viaChatFolderInviteLink = null
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
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * @return ChatMember
     */
    public function getOldChatMember(): ChatMember
    {
        return $this->oldChatMember;
    }

    /**
     * @return ChatMember
     */
    public function getNewChatMember(): ChatMember
    {
        return $this->newChatMember;
    }

    /**
     * @return ChatInviteLink|null
     */
    public function getInviteLink(): ?ChatInviteLink
    {
        return $this->inviteLink;
    }

    /**
     * @return bool|null
     */
    public function getViaJoinRequest(): ?bool
    {
        return $this->viaJoinRequest;
    }

    /**
     * @return bool|null
     */
    public function getViaChatFolderInviteLink(): ?bool
    {
        return $this->viaChatFolderInviteLink;
    }
}
