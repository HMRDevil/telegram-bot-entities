<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Represents the rights of a business bot.
 *
 * @see https://core.telegram.org/bots/api#businessbotrights
 */
final class BusinessBotRights
{
    /**
     * @param true|null $canReply Optional. True, if the bot can send and edit messages in the private chats that had incoming messages in the last 24 hours
     * @param true|null $canReadMessages Optional. True, if the bot can mark incoming private messages as read
     * @param true|null $canDeleteSentMessages Optional. True, if the bot can delete messages sent by the bot
     * @param true|null $canDeleteAllMessages Optional. True, if the bot can delete all private messages in managed chats
     * @param true|null $canEditName Optional. True, if the bot can edit the first and last name of the business account
     * @param true|null $canEditBio Optional. True, if the bot can edit the bio of the business account
     * @param true|null $canEditProfilePhoto Optional. True, if the bot can edit the profile photo of the business account
     * @param true|null $canEditUsername Optional. True, if the bot can edit the username of the business account
     * @param true|null $canChangeGiftSettings Optional. True, if the bot can change the privacy settings pertaining to gifts for the business account
     * @param true|null $canViewGiftsAndStars Optional. True, if the bot can view gifts and the amount of Telegram Stars owned by the business account
     * @param true|null $canConvertGiftsToStars Optional. True, if the bot can convert regular gifts owned by the business account to Telegram Stars
     * @param true|null $canTransferAndUpgradeGifts Optional. True, if the bot can transfer and upgrade gifts owned by the business account
     * @param true|null $canTransferStars Optional. True, if the bot can transfer Telegram Stars received by the business account to its own account, or use them to upgrade and transfer gifts
     * @param true|null $canManageStories Optional. True, if the bot can post, edit and delete stories on behalf of the business account
    */
    public function __construct
    (
         private ?true $canReply = null,
         private ?true $canReadMessages = null,
         private ?true $canDeleteSentMessages = null,
         private ?true $canDeleteAllMessages = null,
         private ?true $canEditName = null,
         private ?true $canEditBio = null,
         private ?true $canEditProfilePhoto = null,
         private ?true $canEditUsername = null,
         private ?true $canChangeGiftSettings = null,
         private ?true $canViewGiftsAndStars = null,
         private ?true $canConvertGiftsToStars = null,
         private ?true $canTransferAndUpgradeGifts = null,
         private ?true $canTransferStars = null,
         private ?true $canManageStories = null
    ) {}
    
    /**
     * @return true|null
     */
    public function getCanReply(): ?true
    {
        return $this->canReply;
    }

    /**
     * @return true|null
     */
    public function getCanReadMessages(): ?true
    {
        return $this->canReadMessages;
    }

    /**
     * @return true|null
     */
    public function getCanDeleteSentMessages(): ?true
    {
        return $this->canDeleteSentMessages;
    }

    /**
     * @return true|null
     */
    public function getCanDeleteAllMessages(): ?true
    {
        return $this->canDeleteAllMessages;
    }

    /**
     * @return true|null
     */
    public function getCanEditName(): ?true
    {
        return $this->canEditName;
    }

    /**
     * @return true|null
     */
    public function getCanEditBio(): ?true
    {
        return $this->canEditBio;
    }

    /**
     * @return true|null
     */
    public function getCanEditProfilePhoto(): ?true
    {
        return $this->canEditProfilePhoto;
    }

    /**
     * @return true|null
     */
    public function getCanEditUsername(): ?true
    {
        return $this->canEditUsername;
    }

    /**
     * @return true|null
     */
    public function getCanChangeGiftSettings(): ?true
    {
        return $this->canChangeGiftSettings;
    }

    /**
     * @return true|null
     */
    public function getCanViewGiftsAndStars(): ?true
    {
        return $this->canViewGiftsAndStars;
    }

    /**
     * @return true|null
     */
    public function getCanConvertGiftsToStars(): ?true
    {
        return $this->canConvertGiftsToStars;
    }

    /**
     * @return true|null
     */
    public function getCanTransferAndUpgradeGifts(): ?true
    {
        return $this->canTransferAndUpgradeGifts;
    }

    /**
     * @return true|null
     */
    public function getCanTransferStars(): ?true
    {
        return $this->canTransferStars;
    }

    /**
     * @return true|null
     */
    public function getCanManageStories(): ?true
    {
        return $this->canManageStories;
    }
}
