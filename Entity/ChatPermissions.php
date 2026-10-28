<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes actions that a non-administrator user is allowed to take in a chat.
 *
 * @see https://core.telegram.org/bots/api#chatpermissions
 */
final class ChatPermissions
{
    /**
     * @param bool|null $canSendMessages Optional. True, if the user is allowed to send text messages, contacts, giveaways, giveaway winners, invoices, locations and venues
     * @param bool|null $canSendAudios Optional. True, if the user is allowed to send audios
     * @param bool|null $canSendDocuments Optional. True, if the user is allowed to send documents
     * @param bool|null $canSendPhotos Optional. True, if the user is allowed to send photos
     * @param bool|null $canSendVideos Optional. True, if the user is allowed to send videos
     * @param bool|null $canSendVideoNotes Optional. True, if the user is allowed to send video notes
     * @param bool|null $canSendVoiceNotes Optional. True, if the user is allowed to send voice notes
     * @param bool|null $canSendPolls Optional. True, if the user is allowed to send polls and checklists
     * @param bool|null $canSendOtherMessages Optional. True, if the user is allowed to send animations, games, stickers and use inline bots
     * @param bool|null $canAddWebPagePreviews Optional. True, if the user is allowed to add web page previews to their messages
     * @param bool|null $canReactToMessages Optional. True, if the user is allowed to react to messages. If omitted, defaults to the value of can_send_messages.
     * @param bool|null $canEditTag Optional. True, if the user is allowed to edit their own tag. If omitted, defaults to the value of can_pin_messages.
     * @param bool|null $canChangeInfo Optional. True, if the user is allowed to change the chat title, photo and other settings. Ignored in public supergroups.
     * @param bool|null $canInviteUsers Optional. True, if the user is allowed to invite new users to the chat
     * @param bool|null $canPinMessages Optional. True, if the user is allowed to pin messages. Ignored in public supergroups.
     * @param bool|null $canManageTopics Optional. True, if the user is allowed to create forum topics. If omitted defaults to the value of can_pin_messages.
    */
    public function __construct
    (
         private ?bool $canSendMessages = null,
         private ?bool $canSendAudios = null,
         private ?bool $canSendDocuments = null,
         private ?bool $canSendPhotos = null,
         private ?bool $canSendVideos = null,
         private ?bool $canSendVideoNotes = null,
         private ?bool $canSendVoiceNotes = null,
         private ?bool $canSendPolls = null,
         private ?bool $canSendOtherMessages = null,
         private ?bool $canAddWebPagePreviews = null,
         private ?bool $canReactToMessages = null,
         private ?bool $canEditTag = null,
         private ?bool $canChangeInfo = null,
         private ?bool $canInviteUsers = null,
         private ?bool $canPinMessages = null,
         private ?bool $canManageTopics = null
    ) {}
    
    /**
     * @return bool|null
     */
    public function getCanSendMessages(): ?bool
    {
        return $this->canSendMessages;
    }

    /**
     * @return bool|null
     */
    public function getCanSendAudios(): ?bool
    {
        return $this->canSendAudios;
    }

    /**
     * @return bool|null
     */
    public function getCanSendDocuments(): ?bool
    {
        return $this->canSendDocuments;
    }

    /**
     * @return bool|null
     */
    public function getCanSendPhotos(): ?bool
    {
        return $this->canSendPhotos;
    }

    /**
     * @return bool|null
     */
    public function getCanSendVideos(): ?bool
    {
        return $this->canSendVideos;
    }

    /**
     * @return bool|null
     */
    public function getCanSendVideoNotes(): ?bool
    {
        return $this->canSendVideoNotes;
    }

    /**
     * @return bool|null
     */
    public function getCanSendVoiceNotes(): ?bool
    {
        return $this->canSendVoiceNotes;
    }

    /**
     * @return bool|null
     */
    public function getCanSendPolls(): ?bool
    {
        return $this->canSendPolls;
    }

    /**
     * @return bool|null
     */
    public function getCanSendOtherMessages(): ?bool
    {
        return $this->canSendOtherMessages;
    }

    /**
     * @return bool|null
     */
    public function getCanAddWebPagePreviews(): ?bool
    {
        return $this->canAddWebPagePreviews;
    }

    /**
     * @return bool|null
     */
    public function getCanReactToMessages(): ?bool
    {
        return $this->canReactToMessages;
    }

    /**
     * @return bool|null
     */
    public function getCanEditTag(): ?bool
    {
        return $this->canEditTag;
    }

    /**
     * @return bool|null
     */
    public function getCanChangeInfo(): ?bool
    {
        return $this->canChangeInfo;
    }

    /**
     * @return bool|null
     */
    public function getCanInviteUsers(): ?bool
    {
        return $this->canInviteUsers;
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
}
