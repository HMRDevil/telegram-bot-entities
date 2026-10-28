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
     * @param bool|null $canReply Optional. True, if the bot can send and edit messages in the private chats that had incoming messages in the last 24 hours
     * @param bool|null $canReadMessages Optional. True, if the bot can mark incoming private messages as read
     * @param bool|null $canDeleteSentMessages Optional. True, if the bot can delete messages sent by the bot
     * @param bool|null $canDeleteAllMessages Optional. True, if the bot can delete all private messages in managed chats
     * @param bool|null $canEditName Optional. True, if the bot can edit the first and last name of the business account
     * @param bool|null $canEditBio Optional. True, if the bot can edit the bio of the business account
     * @param bool|null $canEditProfilePhoto Optional. True, if the bot can edit the profile photo of the business account
     * @param bool|null $canEditUsername Optional. True, if the bot can edit the username of the business account
     * @param bool|null $canChangeGiftSettings Optional. True, if the bot can change the privacy settings pertaining to gifts for the business account
     * @param bool|null $canViewGiftsAndStars Optional. True, if the bot can view gifts and the amount of Telegram Stars owned by the business account
     * @param bool|null $canConvertGiftsToStars Optional. True, if the bot can convert regular gifts owned by the business account to Telegram Stars
     * @param bool|null $canTransferAndUpgradeGifts Optional. True, if the bot can transfer and upgrade gifts owned by the business account
     * @param bool|null $canTransferStars Optional. True, if the bot can transfer Telegram Stars received by the business account to its own account, or use them to upgrade and transfer gifts
     * @param bool|null $canManageStories Optional. True, if the bot can post, edit and delete stories on behalf of the business account
    */
    public function __construct
    (
         private ?bool $canReply = null,
         private ?bool $canReadMessages = null,
         private ?bool $canDeleteSentMessages = null,
         private ?bool $canDeleteAllMessages = null,
         private ?bool $canEditName = null,
         private ?bool $canEditBio = null,
         private ?bool $canEditProfilePhoto = null,
         private ?bool $canEditUsername = null,
         private ?bool $canChangeGiftSettings = null,
         private ?bool $canViewGiftsAndStars = null,
         private ?bool $canConvertGiftsToStars = null,
         private ?bool $canTransferAndUpgradeGifts = null,
         private ?bool $canTransferStars = null,
         private ?bool $canManageStories = null
    ) {}
    
    /**
     * @return bool|null
     */
    public function getCanReply(): ?bool
    {
        return $this->canReply;
    }

    /**
     * @return bool|null
     */
    public function getCanReadMessages(): ?bool
    {
        return $this->canReadMessages;
    }

    /**
     * @return bool|null
     */
    public function getCanDeleteSentMessages(): ?bool
    {
        return $this->canDeleteSentMessages;
    }

    /**
     * @return bool|null
     */
    public function getCanDeleteAllMessages(): ?bool
    {
        return $this->canDeleteAllMessages;
    }

    /**
     * @return bool|null
     */
    public function getCanEditName(): ?bool
    {
        return $this->canEditName;
    }

    /**
     * @return bool|null
     */
    public function getCanEditBio(): ?bool
    {
        return $this->canEditBio;
    }

    /**
     * @return bool|null
     */
    public function getCanEditProfilePhoto(): ?bool
    {
        return $this->canEditProfilePhoto;
    }

    /**
     * @return bool|null
     */
    public function getCanEditUsername(): ?bool
    {
        return $this->canEditUsername;
    }

    /**
     * @return bool|null
     */
    public function getCanChangeGiftSettings(): ?bool
    {
        return $this->canChangeGiftSettings;
    }

    /**
     * @return bool|null
     */
    public function getCanViewGiftsAndStars(): ?bool
    {
        return $this->canViewGiftsAndStars;
    }

    /**
     * @return bool|null
     */
    public function getCanConvertGiftsToStars(): ?bool
    {
        return $this->canConvertGiftsToStars;
    }

    /**
     * @return bool|null
     */
    public function getCanTransferAndUpgradeGifts(): ?bool
    {
        return $this->canTransferAndUpgradeGifts;
    }

    /**
     * @return bool|null
     */
    public function getCanTransferStars(): ?bool
    {
        return $this->canTransferStars;
    }

    /**
     * @return bool|null
     */
    public function getCanManageStories(): ?bool
    {
        return $this->canManageStories;
    }
}
