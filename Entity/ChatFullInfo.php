<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object contains full information about a chat.
 *
 * @see https://core.telegram.org/bots/api#chatfullinfo
 */
final class ChatFullInfo
{
    /**
     * @param int $id Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param string $type Type of the chat, can be either "private", "group", "supergroup" or "channel"
     * @param int $accentColorId Identifier of the accent color for the chat name and backgrounds of the chat photo, reply header, and link preview. See accent colors for more details.
     * @param int $maxReactionCount The maximum number of reactions that can be set on a message in the chat
     * @param AcceptedGiftTypes $acceptedGiftTypes Information about types of gifts that are accepted by the chat or by the corresponding user for private chats
     * @param string|null $title Optional. Title, for supergroups, channels and group chats
     * @param string|null $username Optional. Username, for private chats, supergroups and channels if available
     * @param string|null $firstName Optional. First name of the other party in a private chat
     * @param string|null $lastName Optional. Last name of the other party in a private chat
     * @param bool|null $isForum Optional. True, if the supergroup chat is a forum (has topics enabled)
     * @param bool|null $isDirectMessages Optional. True, if the chat is the direct messages chat of a channel
     * @param ChatPhoto|null $photo Optional. Chat photo
     * @param String[]|null $activeUsernames Optional. If non-empty, the list of all active chat usernames; for private chats, supergroups and channels
     * @param Birthdate|null $birthdate Optional. For private chats, the date of birth of the user
     * @param BusinessIntro|null $businessIntro Optional. For private chats with business accounts, the intro of the business
     * @param BusinessLocation|null $businessLocation Optional. For private chats with business accounts, the location of the business
     * @param BusinessOpeningHours|null $businessOpeningHours Optional. For private chats with business accounts, the opening hours of the business
     * @param Chat|null $personalChat Optional. For private chats, the personal channel of the user
     * @param Chat|null $parentChat Optional. Information about the corresponding channel chat; for direct messages chats only
     * @param ReactionType[]|null $availableReactions Optional. List of available reactions allowed in the chat. If omitted, then all emoji reactions are allowed.
     * @param string|null $backgroundCustomEmojiId Optional. Custom emoji identifier of the emoji chosen by the chat for the reply header and link preview background
     * @param int|null $profileAccentColorId Optional. Identifier of the accent color for the chat's profile background. See profile accent colors for more details.
     * @param string|null $profileBackgroundCustomEmojiId Optional. Custom emoji identifier of the emoji chosen by the chat for its profile background
     * @param string|null $emojiStatusCustomEmojiId Optional. Custom emoji identifier of the emoji status of the chat or the other party in a private chat
     * @param int|null $emojiStatusExpirationDate Optional. Expiration date of the emoji status of the chat or the other party in a private chat, in Unix time, if any
     * @param string|null $bio Optional. Bio of the other party in a private chat
     * @param bool|null $hasPrivateForwards Optional. True, if privacy settings of the other party in the private chat allows to use tg://user?id=<user_id> links only in chats with the user
     * @param bool|null $hasRestrictedVoiceAndVideoMessages Optional. True, if the privacy settings of the other party restrict sending voice and video note messages in the private chat
     * @param bool|null $joinToSendMessages Optional. True, if users need to join the supergroup before they can send messages
     * @param bool|null $joinByRequest Optional. True, if all users directly joining the supergroup without using an invite link need to be approved by supergroup administrators
     * @param string|null $description Optional. Description, for groups, supergroups and channel chats
     * @param string|null $inviteLink Optional. Primary invite link, for groups, supergroups and channel chats
     * @param Message|null $pinnedMessage Optional. The most recent pinned message (by sending date)
     * @param ChatPermissions|null $permissions Optional. Default chat member permissions, for groups and supergroups
     * @param bool|null $canSendPaidMedia Optional. True, if paid media messages can be sent or forwarded to the channel chat. The field is available only for channel chats.
     * @param int|null $slowModeDelay Optional. For supergroups, the minimum allowed delay between consecutive messages sent by each unprivileged user; in seconds
     * @param int|null $unrestrictBoostCount Optional. For supergroups, the minimum number of boosts that a non-administrator user needs to add in order to ignore slow mode and chat permissions
     * @param int|null $messageAutoDeleteTime Optional. The time after which all messages sent to the chat will be automatically deleted; in seconds
     * @param bool|null $hasAggressiveAntiSpamEnabled Optional. True, if aggressive anti-spam checks are enabled in the supergroup. The field is only available to chat administrators.
     * @param bool|null $hasHiddenMembers Optional. True, if non-administrators can only get the list of bots and administrators in the chat
     * @param bool|null $hasProtectedContent Optional. True, if messages from the chat can't be forwarded to other chats
     * @param bool|null $hasVisibleHistory Optional. True, if new chat members will have access to old messages; available only to chat administrators
     * @param string|null $stickerSetName Optional. For supergroups, name of the group sticker set
     * @param bool|null $canSetStickerSet Optional. True, if the bot can change the group sticker set
     * @param string|null $customEmojiStickerSetName Optional. For supergroups, the name of the group's custom emoji sticker set. Custom emoji from this set can be used by all users and bots in the group.
     * @param int|null $linkedChatId Optional. Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice versa; for supergroups and channel chats. This identifier may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
     * @param ChatLocation|null $location Optional. For supergroups, the location to which the supergroup is connected
     * @param UserRating|null $rating Optional. For private chats, the rating of the user if any
     * @param Audio|null $firstProfileAudio Optional. For private chats, the first audio added to the profile of the user
     * @param UniqueGiftColors|null $uniqueGiftColors Optional. The color scheme based on a unique gift that must be used for the chat's name, message replies and link previews
     * @param int|null $paidMessageStarCount Optional. The number of Telegram Stars a general user has to pay to send a message to the chat
     * @param User|null $guardBot Optional. The bot that processes join request queries in the chat. The field is only available to chat administrators.
     * @param Community|null $community Optional. The Community to which the chat belongs
    */
    public function __construct
    (
         private int $id,
         private string $type,
         private int $accentColorId,
         private int $maxReactionCount,
         private AcceptedGiftTypes $acceptedGiftTypes,
         private ?string $title = null,
         private ?string $username = null,
         private ?string $firstName = null,
         private ?string $lastName = null,
         private ?bool $isForum = null,
         private ?bool $isDirectMessages = null,
         private ?ChatPhoto $photo = null,
         private ?array $activeUsernames = null,
         private ?Birthdate $birthdate = null,
         private ?BusinessIntro $businessIntro = null,
         private ?BusinessLocation $businessLocation = null,
         private ?BusinessOpeningHours $businessOpeningHours = null,
         private ?Chat $personalChat = null,
         private ?Chat $parentChat = null,
         private ?array $availableReactions = null,
         private ?string $backgroundCustomEmojiId = null,
         private ?int $profileAccentColorId = null,
         private ?string $profileBackgroundCustomEmojiId = null,
         private ?string $emojiStatusCustomEmojiId = null,
         private ?int $emojiStatusExpirationDate = null,
         private ?string $bio = null,
         private ?bool $hasPrivateForwards = null,
         private ?bool $hasRestrictedVoiceAndVideoMessages = null,
         private ?bool $joinToSendMessages = null,
         private ?bool $joinByRequest = null,
         private ?string $description = null,
         private ?string $inviteLink = null,
         private ?Message $pinnedMessage = null,
         private ?ChatPermissions $permissions = null,
         private ?bool $canSendPaidMedia = null,
         private ?int $slowModeDelay = null,
         private ?int $unrestrictBoostCount = null,
         private ?int $messageAutoDeleteTime = null,
         private ?bool $hasAggressiveAntiSpamEnabled = null,
         private ?bool $hasHiddenMembers = null,
         private ?bool $hasProtectedContent = null,
         private ?bool $hasVisibleHistory = null,
         private ?string $stickerSetName = null,
         private ?bool $canSetStickerSet = null,
         private ?string $customEmojiStickerSetName = null,
         private ?int $linkedChatId = null,
         private ?ChatLocation $location = null,
         private ?UserRating $rating = null,
         private ?Audio $firstProfileAudio = null,
         private ?UniqueGiftColors $uniqueGiftColors = null,
         private ?int $paidMessageStarCount = null,
         private ?User $guardBot = null,
         private ?Community $community = null
    ) {}
    
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getAccentColorId(): int
    {
        return $this->accentColorId;
    }

    /**
     * @return int
     */
    public function getMaxReactionCount(): int
    {
        return $this->maxReactionCount;
    }

    /**
     * @return AcceptedGiftTypes
     */
    public function getAcceptedGiftTypes(): AcceptedGiftTypes
    {
        return $this->acceptedGiftTypes;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @return bool|null
     */
    public function getIsForum(): ?bool
    {
        return $this->isForum;
    }

    /**
     * @return bool|null
     */
    public function getIsDirectMessages(): ?bool
    {
        return $this->isDirectMessages;
    }

    /**
     * @return ChatPhoto|null
     */
    public function getPhoto(): ?ChatPhoto
    {
        return $this->photo;
    }

    /**
     * @return String[]|null
     */
    public function getActiveUsernames(): ?array
    {
        return $this->activeUsernames;
    }

    /**
     * @return Birthdate|null
     */
    public function getBirthdate(): ?Birthdate
    {
        return $this->birthdate;
    }

    /**
     * @return BusinessIntro|null
     */
    public function getBusinessIntro(): ?BusinessIntro
    {
        return $this->businessIntro;
    }

    /**
     * @return BusinessLocation|null
     */
    public function getBusinessLocation(): ?BusinessLocation
    {
        return $this->businessLocation;
    }

    /**
     * @return BusinessOpeningHours|null
     */
    public function getBusinessOpeningHours(): ?BusinessOpeningHours
    {
        return $this->businessOpeningHours;
    }

    /**
     * @return Chat|null
     */
    public function getPersonalChat(): ?Chat
    {
        return $this->personalChat;
    }

    /**
     * @return Chat|null
     */
    public function getParentChat(): ?Chat
    {
        return $this->parentChat;
    }

    /**
     * @return ReactionType[]|null
     */
    public function getAvailableReactions(): ?array
    {
        return $this->availableReactions;
    }

    /**
     * @return string|null
     */
    public function getBackgroundCustomEmojiId(): ?string
    {
        return $this->backgroundCustomEmojiId;
    }

    /**
     * @return int|null
     */
    public function getProfileAccentColorId(): ?int
    {
        return $this->profileAccentColorId;
    }

    /**
     * @return string|null
     */
    public function getProfileBackgroundCustomEmojiId(): ?string
    {
        return $this->profileBackgroundCustomEmojiId;
    }

    /**
     * @return string|null
     */
    public function getEmojiStatusCustomEmojiId(): ?string
    {
        return $this->emojiStatusCustomEmojiId;
    }

    /**
     * @return int|null
     */
    public function getEmojiStatusExpirationDate(): ?int
    {
        return $this->emojiStatusExpirationDate;
    }

    /**
     * @return string|null
     */
    public function getBio(): ?string
    {
        return $this->bio;
    }

    /**
     * @return bool|null
     */
    public function getHasPrivateForwards(): ?bool
    {
        return $this->hasPrivateForwards;
    }

    /**
     * @return bool|null
     */
    public function getHasRestrictedVoiceAndVideoMessages(): ?bool
    {
        return $this->hasRestrictedVoiceAndVideoMessages;
    }

    /**
     * @return bool|null
     */
    public function getJoinToSendMessages(): ?bool
    {
        return $this->joinToSendMessages;
    }

    /**
     * @return bool|null
     */
    public function getJoinByRequest(): ?bool
    {
        return $this->joinByRequest;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return string|null
     */
    public function getInviteLink(): ?string
    {
        return $this->inviteLink;
    }

    /**
     * @return Message|null
     */
    public function getPinnedMessage(): ?Message
    {
        return $this->pinnedMessage;
    }

    /**
     * @return ChatPermissions|null
     */
    public function getPermissions(): ?ChatPermissions
    {
        return $this->permissions;
    }

    /**
     * @return bool|null
     */
    public function getCanSendPaidMedia(): ?bool
    {
        return $this->canSendPaidMedia;
    }

    /**
     * @return int|null
     */
    public function getSlowModeDelay(): ?int
    {
        return $this->slowModeDelay;
    }

    /**
     * @return int|null
     */
    public function getUnrestrictBoostCount(): ?int
    {
        return $this->unrestrictBoostCount;
    }

    /**
     * @return int|null
     */
    public function getMessageAutoDeleteTime(): ?int
    {
        return $this->messageAutoDeleteTime;
    }

    /**
     * @return bool|null
     */
    public function getHasAggressiveAntiSpamEnabled(): ?bool
    {
        return $this->hasAggressiveAntiSpamEnabled;
    }

    /**
     * @return bool|null
     */
    public function getHasHiddenMembers(): ?bool
    {
        return $this->hasHiddenMembers;
    }

    /**
     * @return bool|null
     */
    public function getHasProtectedContent(): ?bool
    {
        return $this->hasProtectedContent;
    }

    /**
     * @return bool|null
     */
    public function getHasVisibleHistory(): ?bool
    {
        return $this->hasVisibleHistory;
    }

    /**
     * @return string|null
     */
    public function getStickerSetName(): ?string
    {
        return $this->stickerSetName;
    }

    /**
     * @return bool|null
     */
    public function getCanSetStickerSet(): ?bool
    {
        return $this->canSetStickerSet;
    }

    /**
     * @return string|null
     */
    public function getCustomEmojiStickerSetName(): ?string
    {
        return $this->customEmojiStickerSetName;
    }

    /**
     * @return int|null
     */
    public function getLinkedChatId(): ?int
    {
        return $this->linkedChatId;
    }

    /**
     * @return ChatLocation|null
     */
    public function getLocation(): ?ChatLocation
    {
        return $this->location;
    }

    /**
     * @return UserRating|null
     */
    public function getRating(): ?UserRating
    {
        return $this->rating;
    }

    /**
     * @return Audio|null
     */
    public function getFirstProfileAudio(): ?Audio
    {
        return $this->firstProfileAudio;
    }

    /**
     * @return UniqueGiftColors|null
     */
    public function getUniqueGiftColors(): ?UniqueGiftColors
    {
        return $this->uniqueGiftColors;
    }

    /**
     * @return int|null
     */
    public function getPaidMessageStarCount(): ?int
    {
        return $this->paidMessageStarCount;
    }

    /**
     * @return User|null
     */
    public function getGuardBot(): ?User
    {
        return $this->guardBot;
    }

    /**
     * @return Community|null
     */
    public function getCommunity(): ?Community
    {
        return $this->community;
    }
}
