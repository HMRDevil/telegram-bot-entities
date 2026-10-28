<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Represents a chat member that is under certain restrictions in the chat. Supergroups only.
 *
 * @see https://core.telegram.org/bots/api#chatmemberrestricted
 */
final class ChatMemberRestricted
{
    /**
     * @param string $status The member's status in the chat, always "restricted"
     * @param User $user Information about the user
     * @param bool $isMember True, if the user is a member of the chat at the moment of the request
     * @param bool $canSendMessages True, if the user is allowed to send text messages, contacts, giveaways, giveaway winners, invoices, locations and venues
     * @param bool $canSendAudios True, if the user is allowed to send audios
     * @param bool $canSendDocuments True, if the user is allowed to send documents
     * @param bool $canSendPhotos True, if the user is allowed to send photos
     * @param bool $canSendVideos True, if the user is allowed to send videos
     * @param bool $canSendVideoNotes True, if the user is allowed to send video notes
     * @param bool $canSendVoiceNotes True, if the user is allowed to send voice notes
     * @param bool $canSendPolls True, if the user is allowed to send polls and checklists
     * @param bool $canSendOtherMessages True, if the user is allowed to send animations, games, stickers and use inline bots
     * @param bool $canAddWebPagePreviews True, if the user is allowed to add web page previews to their messages
     * @param bool $canReactToMessages True, if the user is allowed to react to messages
     * @param bool $canEditTag True, if the user is allowed to edit their own tag
     * @param bool $canChangeInfo True, if the user is allowed to change the chat title, photo and other settings
     * @param bool $canInviteUsers True, if the user is allowed to invite new users to the chat
     * @param bool $canPinMessages True, if the user is allowed to pin messages
     * @param bool $canManageTopics True, if the user is allowed to create forum topics
     * @param int $untilDate Date when restrictions will be lifted for this user; Unix time. If 0, then the user is restricted forever.
     * @param string|null $tag Optional. Tag of the member
    */
    public function __construct
    (
         private string $status,
         private User $user,
         private bool $isMember,
         private bool $canSendMessages,
         private bool $canSendAudios,
         private bool $canSendDocuments,
         private bool $canSendPhotos,
         private bool $canSendVideos,
         private bool $canSendVideoNotes,
         private bool $canSendVoiceNotes,
         private bool $canSendPolls,
         private bool $canSendOtherMessages,
         private bool $canAddWebPagePreviews,
         private bool $canReactToMessages,
         private bool $canEditTag,
         private bool $canChangeInfo,
         private bool $canInviteUsers,
         private bool $canPinMessages,
         private bool $canManageTopics,
         private int $untilDate,
         private ?string $tag = null
    ) {}
    
    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @return bool
     */
    public function getIsMember(): bool
    {
        return $this->isMember;
    }

    /**
     * @return bool
     */
    public function getCanSendMessages(): bool
    {
        return $this->canSendMessages;
    }

    /**
     * @return bool
     */
    public function getCanSendAudios(): bool
    {
        return $this->canSendAudios;
    }

    /**
     * @return bool
     */
    public function getCanSendDocuments(): bool
    {
        return $this->canSendDocuments;
    }

    /**
     * @return bool
     */
    public function getCanSendPhotos(): bool
    {
        return $this->canSendPhotos;
    }

    /**
     * @return bool
     */
    public function getCanSendVideos(): bool
    {
        return $this->canSendVideos;
    }

    /**
     * @return bool
     */
    public function getCanSendVideoNotes(): bool
    {
        return $this->canSendVideoNotes;
    }

    /**
     * @return bool
     */
    public function getCanSendVoiceNotes(): bool
    {
        return $this->canSendVoiceNotes;
    }

    /**
     * @return bool
     */
    public function getCanSendPolls(): bool
    {
        return $this->canSendPolls;
    }

    /**
     * @return bool
     */
    public function getCanSendOtherMessages(): bool
    {
        return $this->canSendOtherMessages;
    }

    /**
     * @return bool
     */
    public function getCanAddWebPagePreviews(): bool
    {
        return $this->canAddWebPagePreviews;
    }

    /**
     * @return bool
     */
    public function getCanReactToMessages(): bool
    {
        return $this->canReactToMessages;
    }

    /**
     * @return bool
     */
    public function getCanEditTag(): bool
    {
        return $this->canEditTag;
    }

    /**
     * @return bool
     */
    public function getCanChangeInfo(): bool
    {
        return $this->canChangeInfo;
    }

    /**
     * @return bool
     */
    public function getCanInviteUsers(): bool
    {
        return $this->canInviteUsers;
    }

    /**
     * @return bool
     */
    public function getCanPinMessages(): bool
    {
        return $this->canPinMessages;
    }

    /**
     * @return bool
     */
    public function getCanManageTopics(): bool
    {
        return $this->canManageTopics;
    }

    /**
     * @return int
     */
    public function getUntilDate(): int
    {
        return $this->untilDate;
    }

    /**
     * @return string|null
     */
    public function getTag(): ?string
    {
        return $this->tag;
    }
}
