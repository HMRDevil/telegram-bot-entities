<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Represents the rights of an administrator in a chat.
 *
 * @see https://core.telegram.org/bots/api#chatadministratorrights
 */
final class ChatAdministratorRights
{
    /**
     * @param bool $isAnonymous True, if the user's presence in the chat is hidden
     * @param bool $canManageChat True, if the administrator can access the chat event log, get boost list, see hidden supergroup and channel members, report spam messages, ignore slow mode, and send messages to the chat without paying Telegram Stars. Implied by any other administrator privilege.
     * @param bool $canDeleteMessages True, if the administrator can delete messages of other users
     * @param bool $canManageVideoChats True, if the administrator can manage video chats
     * @param bool $canRestrictMembers True, if the administrator can restrict, ban or unban chat members, or access supergroup statistics
     * @param bool $canPromoteMembers True, if the administrator can add new administrators with a subset of their own privileges or demote administrators that they have promoted, directly or indirectly (promoted by administrators that were appointed by the user)
     * @param bool $canChangeInfo True, if the user is allowed to change the chat title, photo and other settings
     * @param bool $canInviteUsers True, if the user is allowed to invite new users to the chat
     * @param bool $canPostStories True, if the administrator can post stories to the chat
     * @param bool $canEditStories True, if the administrator can edit stories posted by other users, post stories to the chat page, pin chat stories, and access the chat's story archive
     * @param bool $canDeleteStories True, if the administrator can delete stories posted by other users
     * @param bool $canSendWelcomeMessages True, if the administrator can manage chat welcome messages or directly send them in the case of bots
     * @param bool|null $canPostMessages Optional. True, if the administrator can post messages in the channel, approve suggested posts, or access channel statistics; for channels only
     * @param bool|null $canEditMessages Optional. True, if the administrator can edit messages of other users and can pin messages; for channels only
     * @param bool|null $canPinMessages Optional. True, if the user is allowed to pin messages; for groups and supergroups only
     * @param bool|null $canManageTopics Optional. True, if the user is allowed to create, rename, close, and reopen forum topics; for supergroups only
     * @param bool|null $canManageDirectMessages Optional. True, if the administrator can manage direct messages of the channel and decline suggested posts; for channels only
     * @param bool|null $canManageTags Optional. True, if the administrator can edit the tags of regular members; for groups and supergroups only
    */
    public function __construct
    (
         private bool $isAnonymous,
         private bool $canManageChat,
         private bool $canDeleteMessages,
         private bool $canManageVideoChats,
         private bool $canRestrictMembers,
         private bool $canPromoteMembers,
         private bool $canChangeInfo,
         private bool $canInviteUsers,
         private bool $canPostStories,
         private bool $canEditStories,
         private bool $canDeleteStories,
         private bool $canSendWelcomeMessages,
         private ?bool $canPostMessages = null,
         private ?bool $canEditMessages = null,
         private ?bool $canPinMessages = null,
         private ?bool $canManageTopics = null,
         private ?bool $canManageDirectMessages = null,
         private ?bool $canManageTags = null
    ) {}
    
    /**
     * @return bool
     */
    public function getIsAnonymous(): bool
    {
        return $this->isAnonymous;
    }

    /**
     * @return bool
     */
    public function getCanManageChat(): bool
    {
        return $this->canManageChat;
    }

    /**
     * @return bool
     */
    public function getCanDeleteMessages(): bool
    {
        return $this->canDeleteMessages;
    }

    /**
     * @return bool
     */
    public function getCanManageVideoChats(): bool
    {
        return $this->canManageVideoChats;
    }

    /**
     * @return bool
     */
    public function getCanRestrictMembers(): bool
    {
        return $this->canRestrictMembers;
    }

    /**
     * @return bool
     */
    public function getCanPromoteMembers(): bool
    {
        return $this->canPromoteMembers;
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
    public function getCanPostStories(): bool
    {
        return $this->canPostStories;
    }

    /**
     * @return bool
     */
    public function getCanEditStories(): bool
    {
        return $this->canEditStories;
    }

    /**
     * @return bool
     */
    public function getCanDeleteStories(): bool
    {
        return $this->canDeleteStories;
    }

    /**
     * @return bool
     */
    public function getCanSendWelcomeMessages(): bool
    {
        return $this->canSendWelcomeMessages;
    }

    /**
     * @return bool|null
     */
    public function getCanPostMessages(): ?bool
    {
        return $this->canPostMessages;
    }

    /**
     * @return bool|null
     */
    public function getCanEditMessages(): ?bool
    {
        return $this->canEditMessages;
    }

    /**
     * @return bool|null
     */
    public function getCanPinMessages(): ?bool
    {
        return $this->canPinMessages;
    }

    /**
     * @return bool|null
     */
    public function getCanManageTopics(): ?bool
    {
        return $this->canManageTopics;
    }

    /**
     * @return bool|null
     */
    public function getCanManageDirectMessages(): ?bool
    {
        return $this->canManageDirectMessages;
    }

    /**
     * @return bool|null
     */
    public function getCanManageTags(): ?bool
    {
        return $this->canManageTags;
    }
}
