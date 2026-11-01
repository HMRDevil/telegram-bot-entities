<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents a message.
 *
 * @see https://core.telegram.org/bots/api#message
 */
final class Message
{
    /**
     * @param int $messageId Unique message identifier inside this chat. In specific instances (e.g., message containing a video sent to a big chat), the server might automatically schedule a message instead of sending it immediately. In such cases, this field will be 0 and the relevant message will be unusable until it is actually sent.
     * @param int $date Date the message was sent in Unix time. It is always a positive number, representing a valid date.
     * @param Chat $chat Chat the message belongs to
     * @param int|null $messageThreadId Optional. Unique identifier of a message thread or forum topic to which the message belongs; for supergroups and private chats only
     * @param DirectMessagesTopic|null $directMessagesTopic Optional. Information about the direct messages chat topic that contains the message
     * @param User|null $from Optional. Sender of the message; may be empty for messages sent to channels. For backward compatibility, if the message was sent on behalf of a chat, the field contains a fake sender user in non-channel chats.
     * @param Chat|null $senderChat Optional. Sender of the message when sent on behalf of a chat. For example, the supergroup itself for messages sent by its anonymous administrators or a linked channel for messages automatically forwarded to the channel's discussion group. For backward compatibility, if the message was sent on behalf of a chat, the field from contains a fake sender user in non-channel chats.
     * @param int|null $senderBoostCount Optional. If the sender of the message boosted the chat, the number of boosts added by the user
     * @param User|null $senderBusinessBot Optional. The bot that actually sent the message on behalf of the business account. Available only for outgoing messages sent on behalf of the connected business account.
     * @param string|null $senderTag Optional. Tag or custom title of the sender of the message; for supergroups only
     * @param string|null $guestQueryId Optional. The unique identifier for the guest query. Use this identifier with the method answerGuestQuery to send a response message. If non-empty, the message belongs to the chat where the guest bot was summoned, which may not coincide with other existing bot chats sharing the same identifier.
     * @param string|null $businessConnectionId Optional. Unique identifier of the business connection from which the message was received. If non-empty, the message belongs to a chat of the corresponding business account that is independent from any potential bot chat which might share the same identifier.
     * @param MessageOrigin|null $forwardOrigin Optional. Information about the original message for forwarded messages
     * @param bool|null $isTopicMessage Optional. True, if the message is sent to a topic in a forum supergroup or a private chat with the bot
     * @param bool|null $isAutomaticForward Optional. True, if the message is a channel post that was automatically forwarded to the connected discussion group
     * @param Message|null $replyToMessage Optional. For replies in the same chat and message thread, the original message. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
     * @param ExternalReplyInfo|null $externalReply Optional. Information about the message that is being replied to, which may come from another chat or forum topic
     * @param TextQuote|null $quote Optional. For replies that quote part of the original message, the quoted part of the message
     * @param Story|null $replyToStory Optional. For replies to a story, the original story
     * @param int|null $replyToChecklistTaskId Optional. Identifier of the specific checklist task that is being replied to
     * @param string|null $replyToPollOptionId Optional. Persistent identifier of the specific poll option that is being replied to
     * @param User|null $viaBot Optional. Bot through which the message was sent
     * @param User|null $guestBotCallerUser Optional. For a message sent by a guest bot, this is the user whose original message triggered the bot's response
     * @param Chat|null $guestBotCallerChat Optional. For a message sent by a guest bot, this is the chat whose original message triggered the bot's response
     * @param int|null $editDate Optional. Date the message was last edited in Unix time
     * @param bool|null $hasProtectedContent Optional. True, if the message can't be forwarded
     * @param bool|null $isFromOffline Optional. True, if the message was sent by an implicit action, for example, as an away or a greeting business message, or as a scheduled message
     * @param bool|null $isPaidPost Optional. True, if the message is a paid post. Note that such posts must not be deleted for 24 hours to receive the payment and can't be edited.
     * @param string|null $mediaGroupId Optional. The unique identifier inside this chat of a media message group this message belongs to
     * @param string|null $authorSignature Optional. Signature of the post author for messages in channels, or the custom title of an anonymous group administrator
     * @param int|null $paidStarCount Optional. The number of Telegram Stars that were paid by the sender of the message to send it
     * @param string|null $text Optional. For text messages, the actual UTF-8 text of the message
     * @param MessageEntity[]|null $entities Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
     * @param LinkPreviewOptions|null $linkPreviewOptions Optional. Options used for link preview generation for the message, if it is a text message and link preview options were changed
     * @param SuggestedPostInfo|null $suggestedPostInfo Optional. Information about suggested post parameters if the message is a suggested post in a channel direct messages chat. If the message is an approved or declined suggested post, then it can't be edited.
     * @param string|null $effectId Optional. Unique identifier of the message effect added to the message
     * @param RichMessage|null $richMessage Optional. Message is a rich formatted message
     * @param Animation|null $animation Optional. Message is an animation, information about the animation. For backward compatibility, when this field is set, the document field will also be set.
     * @param Audio|null $audio Optional. Message is an audio file, information about the file
     * @param Document|null $document Optional. Message is a general file, information about the file
     * @param LivePhoto|null $livePhoto Optional. Message is a live photo, information about the live photo. For backward compatibility, when this field is set, the photo field will also be set.
     * @param PaidMediaInfo|null $paidMedia Optional. Message contains paid media; information about the paid media
     * @param PhotoSize[]|null $photo Optional. Message is a photo, available sizes of the photo
     * @param Sticker|null $sticker Optional. Message is a sticker, information about the sticker
     * @param Story|null $story Optional. Message is a forwarded story
     * @param Video|null $video Optional. Message is a video, information about the video
     * @param VideoNote|null $videoNote Optional. Message is a video note, information about the video message
     * @param Voice|null $voice Optional. Message is a voice message, information about the file
     * @param string|null $caption Optional. Caption for the animation, audio, document, paid media, photo, video or voice
     * @param MessageEntity[]|null $captionEntities Optional. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption
     * @param bool|null $showCaptionAboveMedia Optional. True, if the caption must be shown above the message media
     * @param bool|null $hasMediaSpoiler Optional. True, if the message media is covered by a spoiler animation
     * @param Checklist|null $checklist Optional. Message is a checklist
     * @param Contact|null $contact Optional. Message is a shared contact, information about the contact
     * @param Dice|null $dice Optional. Message is a dice with random value
     * @param Game|null $game Optional. Message is a game, information about the game. More about games: https://core.telegram.org/bots/api#games
     * @param Poll|null $poll Optional. Message is a native poll, information about the poll
     * @param Venue|null $venue Optional. Message is a venue, information about the venue. For backward compatibility, when this field is set, the location field will also be set.
     * @param Location|null $location Optional. Message is a shared location, information about the location
     * @param User[]|null $newChatMembers Optional. New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
     * @param User|null $leftChatMember Optional. A member was removed from the group, information about them (this member may be the bot itself)
     * @param ChatOwnerLeft|null $chatOwnerLeft Optional. Service message: chat owner has left
     * @param ChatOwnerChanged|null $chatOwnerChanged Optional. Service message: chat owner has changed
     * @param string|null $newChatTitle Optional. A chat title was changed to this value
     * @param PhotoSize[]|null $newChatPhoto Optional. A chat photo was change to this value
     * @param bool|null $deleteChatPhoto Optional. Service message: the chat photo was deleted
     * @param bool|null $groupChatCreated Optional. Service message: the group has been created
     * @param bool|null $supergroupChatCreated Optional. Service message: the supergroup has been created. This field can't be received in a message coming through updates, because bot can't be a member of a supergroup when it is created. It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup.
     * @param bool|null $channelChatCreated Optional. Service message: the channel has been created. This field can't be received in a message coming through updates, because bot can't be a member of a channel when it is created. It can only be found in reply_to_message if someone replies to a very first message in a channel.
     * @param MessageAutoDeleteTimerChanged|null $messageAutoDeleteTimerChanged Optional. Service message: auto-delete timer settings changed in the chat
     * @param int|null $migrateToChatId Optional. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param int|null $migrateFromChatId Optional. The supergroup has been migrated from a group with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param MaybeInaccessibleMessage|null $pinnedMessage Optional. Specified message was pinned. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
     * @param Invoice|null $invoice Optional. Message is an invoice for a payment, information about the invoice. More about payments: https://core.telegram.org/bots/api#payments
     * @param SuccessfulPayment|null $successfulPayment Optional. Message is a service message about a successful payment, information about the payment. More about payments: https://core.telegram.org/bots/api#payments
     * @param RefundedPayment|null $refundedPayment Optional. Message is a service message about a refunded payment, information about the payment. More about payments: https://core.telegram.org/bots/api#payments
     * @param UsersShared|null $usersShared Optional. Service message: users were shared with the bot
     * @param ChatShared|null $chatShared Optional. Service message: a chat was shared with the bot
     * @param GiftInfo|null $gift Optional. Service message: a regular gift was sent or received
     * @param UniqueGiftInfo|null $uniqueGift Optional. Service message: a unique gift was sent or received
     * @param GiftInfo|null $giftUpgradeSent Optional. Service message: upgrade of a gift was purchased after the gift was sent
     * @param string|null $connectedWebsite Optional. The domain name of the website on which the user has logged in. More about Telegram Login: https://core.telegram.org/widgets/login
     * @param WriteAccessAllowed|null $writeAccessAllowed Optional. Service message: the user allowed the bot to write messages after adding it to the attachment or side menu, launching a Web App from a link, or accepting an explicit request from a Web App sent by the method requestWriteAccess
     * @param PassportData|null $passportData Optional. Telegram Passport data
     * @param ProximityAlertTriggered|null $proximityAlertTriggered Optional. Service message. A user in the chat triggered another user's proximity alert while sharing Live Location.
     * @param ChatBoostAdded|null $boostAdded Optional. Service message: user boosted the chat
     * @param ChatBackground|null $chatBackgroundSet Optional. Service message: chat background set
     * @param ChecklistTasksDone|null $checklistTasksDone Optional. Service message: some tasks in a checklist were marked as done or not done
     * @param ChecklistTasksAdded|null $checklistTasksAdded Optional. Service message: tasks were added to a checklist
     * @param DirectMessagePriceChanged|null $directMessagePriceChanged Optional. Service message: the price for paid messages in the corresponding direct messages chat of a channel has changed
     * @param ForumTopicCreated|null $forumTopicCreated Optional. Service message: forum topic created
     * @param ForumTopicEdited|null $forumTopicEdited Optional. Service message: forum topic edited
     * @param ForumTopicClosed|null $forumTopicClosed Optional. Service message: forum topic closed
     * @param ForumTopicReopened|null $forumTopicReopened Optional. Service message: forum topic reopened
     * @param GeneralForumTopicHidden|null $generalForumTopicHidden Optional. Service message: the 'General' forum topic hidden
     * @param GeneralForumTopicUnhidden|null $generalForumTopicUnhidden Optional. Service message: the 'General' forum topic unhidden
     * @param GiveawayCreated|null $giveawayCreated Optional. Service message: a scheduled giveaway was created
     * @param Giveaway|null $giveaway Optional. The message is a scheduled giveaway message
     * @param GiveawayWinners|null $giveawayWinners Optional. A giveaway with public winners was completed
     * @param GiveawayCompleted|null $giveawayCompleted Optional. Service message: a giveaway without public winners was completed
     * @param ManagedBotCreated|null $managedBotCreated Optional. Service message: user created a bot that will be managed by the current bot
     * @param PaidMessagePriceChanged|null $paidMessagePriceChanged Optional. Service message: the price for paid messages has changed in the chat
     * @param PollOptionAdded|null $pollOptionAdded Optional. Service message: answer option was added to a poll
     * @param PollOptionDeleted|null $pollOptionDeleted Optional. Service message: answer option was deleted from a poll
     * @param SuggestedPostApproved|null $suggestedPostApproved Optional. Service message: a suggested post was approved
     * @param SuggestedPostApprovalFailed|null $suggestedPostApprovalFailed Optional. Service message: approval of a suggested post has failed
     * @param SuggestedPostDeclined|null $suggestedPostDeclined Optional. Service message: a suggested post was declined
     * @param SuggestedPostPaid|null $suggestedPostPaid Optional. Service message: payment for a suggested post was received
     * @param SuggestedPostRefunded|null $suggestedPostRefunded Optional. Service message: payment for a suggested post was refunded
     * @param VideoChatScheduled|null $videoChatScheduled Optional. Service message: video chat scheduled
     * @param VideoChatStarted|null $videoChatStarted Optional. Service message: video chat started
     * @param VideoChatEnded|null $videoChatEnded Optional. Service message: video chat ended
     * @param VideoChatParticipantsInvited|null $videoChatParticipantsInvited Optional. Service message: new participants invited to a video chat
     * @param WebAppData|null $webAppData Optional. Service message: data sent by a Web App
     * @param InlineKeyboardMarkup|null $replyMarkup Optional. Inline keyboard attached to the message. login_url buttons are represented as ordinary url buttons.
    */
    public function __construct
    (
         private int $messageId,
         private int $date,
         private Chat $chat,
         private ?int $messageThreadId = null,
         private ?DirectMessagesTopic $directMessagesTopic = null,
         private ?User $from = null,
         private ?Chat $senderChat = null,
         private ?int $senderBoostCount = null,
         private ?User $senderBusinessBot = null,
         private ?string $senderTag = null,
         private ?string $guestQueryId = null,
         private ?string $businessConnectionId = null,
         private ?MessageOrigin $forwardOrigin = null,
         private ?bool $isTopicMessage = null,
         private ?bool $isAutomaticForward = null,
         private ?Message $replyToMessage = null,
         private ?ExternalReplyInfo $externalReply = null,
         private ?TextQuote $quote = null,
         private ?Story $replyToStory = null,
         private ?int $replyToChecklistTaskId = null,
         private ?string $replyToPollOptionId = null,
         private ?User $viaBot = null,
         private ?User $guestBotCallerUser = null,
         private ?Chat $guestBotCallerChat = null,
         private ?int $editDate = null,
         private ?bool $hasProtectedContent = null,
         private ?bool $isFromOffline = null,
         private ?bool $isPaidPost = null,
         private ?string $mediaGroupId = null,
         private ?string $authorSignature = null,
         private ?int $paidStarCount = null,
         private ?string $text = null,
         private ?array $entities = null,
         private ?LinkPreviewOptions $linkPreviewOptions = null,
         private ?SuggestedPostInfo $suggestedPostInfo = null,
         private ?string $effectId = null,
         private ?RichMessage $richMessage = null,
         private ?Animation $animation = null,
         private ?Audio $audio = null,
         private ?Document $document = null,
         private ?LivePhoto $livePhoto = null,
         private ?PaidMediaInfo $paidMedia = null,
         private ?array $photo = null,
         private ?Sticker $sticker = null,
         private ?Story $story = null,
         private ?Video $video = null,
         private ?VideoNote $videoNote = null,
         private ?Voice $voice = null,
         private ?string $caption = null,
         private ?array $captionEntities = null,
         private ?bool $showCaptionAboveMedia = null,
         private ?bool $hasMediaSpoiler = null,
         private ?Checklist $checklist = null,
         private ?Contact $contact = null,
         private ?Dice $dice = null,
         private ?Game $game = null,
         private ?Poll $poll = null,
         private ?Venue $venue = null,
         private ?Location $location = null,
         private ?array $newChatMembers = null,
         private ?User $leftChatMember = null,
         private ?ChatOwnerLeft $chatOwnerLeft = null,
         private ?ChatOwnerChanged $chatOwnerChanged = null,
         private ?string $newChatTitle = null,
         private ?array $newChatPhoto = null,
         private ?bool $deleteChatPhoto = null,
         private ?bool $groupChatCreated = null,
         private ?bool $supergroupChatCreated = null,
         private ?bool $channelChatCreated = null,
         private ?MessageAutoDeleteTimerChanged $messageAutoDeleteTimerChanged = null,
         private ?int $migrateToChatId = null,
         private ?int $migrateFromChatId = null,
         private ?MaybeInaccessibleMessage $pinnedMessage = null,
         private ?Invoice $invoice = null,
         private ?SuccessfulPayment $successfulPayment = null,
         private ?RefundedPayment $refundedPayment = null,
         private ?UsersShared $usersShared = null,
         private ?ChatShared $chatShared = null,
         private ?GiftInfo $gift = null,
         private ?UniqueGiftInfo $uniqueGift = null,
         private ?GiftInfo $giftUpgradeSent = null,
         private ?string $connectedWebsite = null,
         private ?WriteAccessAllowed $writeAccessAllowed = null,
         private ?PassportData $passportData = null,
         private ?ProximityAlertTriggered $proximityAlertTriggered = null,
         private ?ChatBoostAdded $boostAdded = null,
         private ?ChatBackground $chatBackgroundSet = null,
         private ?ChecklistTasksDone $checklistTasksDone = null,
         private ?ChecklistTasksAdded $checklistTasksAdded = null,
         private ?DirectMessagePriceChanged $directMessagePriceChanged = null,
         private ?ForumTopicCreated $forumTopicCreated = null,
         private ?ForumTopicEdited $forumTopicEdited = null,
         private ?ForumTopicClosed $forumTopicClosed = null,
         private ?ForumTopicReopened $forumTopicReopened = null,
         private ?GeneralForumTopicHidden $generalForumTopicHidden = null,
         private ?GeneralForumTopicUnhidden $generalForumTopicUnhidden = null,
         private ?GiveawayCreated $giveawayCreated = null,
         private ?Giveaway $giveaway = null,
         private ?GiveawayWinners $giveawayWinners = null,
         private ?GiveawayCompleted $giveawayCompleted = null,
         private ?ManagedBotCreated $managedBotCreated = null,
         private ?PaidMessagePriceChanged $paidMessagePriceChanged = null,
         private ?PollOptionAdded $pollOptionAdded = null,
         private ?PollOptionDeleted $pollOptionDeleted = null,
         private ?SuggestedPostApproved $suggestedPostApproved = null,
         private ?SuggestedPostApprovalFailed $suggestedPostApprovalFailed = null,
         private ?SuggestedPostDeclined $suggestedPostDeclined = null,
         private ?SuggestedPostPaid $suggestedPostPaid = null,
         private ?SuggestedPostRefunded $suggestedPostRefunded = null,
         private ?VideoChatScheduled $videoChatScheduled = null,
         private ?VideoChatStarted $videoChatStarted = null,
         private ?VideoChatEnded $videoChatEnded = null,
         private ?VideoChatParticipantsInvited $videoChatParticipantsInvited = null,
         private ?WebAppData $webAppData = null,
         private ?InlineKeyboardMarkup $replyMarkup = null
    ) {}
    
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
     * @return Chat
     */
    public function getChat(): Chat
    {
        return $this->chat;
    }

    /**
     * @return int|null
     */
    public function getMessageThreadId(): ?int
    {
        return $this->messageThreadId;
    }

    /**
     * @return DirectMessagesTopic|null
     */
    public function getDirectMessagesTopic(): ?DirectMessagesTopic
    {
        return $this->directMessagesTopic;
    }

    /**
     * @return User|null
     */
    public function getFrom(): ?User
    {
        return $this->from;
    }

    /**
     * @return Chat|null
     */
    public function getSenderChat(): ?Chat
    {
        return $this->senderChat;
    }

    /**
     * @return int|null
     */
    public function getSenderBoostCount(): ?int
    {
        return $this->senderBoostCount;
    }

    /**
     * @return User|null
     */
    public function getSenderBusinessBot(): ?User
    {
        return $this->senderBusinessBot;
    }

    /**
     * @return string|null
     */
    public function getSenderTag(): ?string
    {
        return $this->senderTag;
    }

    /**
     * @return string|null
     */
    public function getGuestQueryId(): ?string
    {
        return $this->guestQueryId;
    }

    /**
     * @return string|null
     */
    public function getBusinessConnectionId(): ?string
    {
        return $this->businessConnectionId;
    }

    /**
     * @return MessageOrigin|null
     */
    public function getForwardOrigin(): ?MessageOrigin
    {
        return $this->forwardOrigin;
    }

    /**
     * @return bool|null
     */
    public function getIsTopicMessage(): ?bool
    {
        return $this->isTopicMessage;
    }

    /**
     * @return bool|null
     */
    public function getIsAutomaticForward(): ?bool
    {
        return $this->isAutomaticForward;
    }

    /**
     * @return Message|null
     */
    public function getReplyToMessage(): ?Message
    {
        return $this->replyToMessage;
    }

    /**
     * @return ExternalReplyInfo|null
     */
    public function getExternalReply(): ?ExternalReplyInfo
    {
        return $this->externalReply;
    }

    /**
     * @return TextQuote|null
     */
    public function getQuote(): ?TextQuote
    {
        return $this->quote;
    }

    /**
     * @return Story|null
     */
    public function getReplyToStory(): ?Story
    {
        return $this->replyToStory;
    }

    /**
     * @return int|null
     */
    public function getReplyToChecklistTaskId(): ?int
    {
        return $this->replyToChecklistTaskId;
    }

    /**
     * @return string|null
     */
    public function getReplyToPollOptionId(): ?string
    {
        return $this->replyToPollOptionId;
    }

    /**
     * @return User|null
     */
    public function getViaBot(): ?User
    {
        return $this->viaBot;
    }

    /**
     * @return User|null
     */
    public function getGuestBotCallerUser(): ?User
    {
        return $this->guestBotCallerUser;
    }

    /**
     * @return Chat|null
     */
    public function getGuestBotCallerChat(): ?Chat
    {
        return $this->guestBotCallerChat;
    }

    /**
     * @return int|null
     */
    public function getEditDate(): ?int
    {
        return $this->editDate;
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
    public function getIsFromOffline(): ?bool
    {
        return $this->isFromOffline;
    }

    /**
     * @return bool|null
     */
    public function getIsPaidPost(): ?bool
    {
        return $this->isPaidPost;
    }

    /**
     * @return string|null
     */
    public function getMediaGroupId(): ?string
    {
        return $this->mediaGroupId;
    }

    /**
     * @return string|null
     */
    public function getAuthorSignature(): ?string
    {
        return $this->authorSignature;
    }

    /**
     * @return int|null
     */
    public function getPaidStarCount(): ?int
    {
        return $this->paidStarCount;
    }

    /**
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @return MessageEntity[]|null
     */
    public function getEntities(): ?array
    {
        return $this->entities;
    }

    /**
     * @return LinkPreviewOptions|null
     */
    public function getLinkPreviewOptions(): ?LinkPreviewOptions
    {
        return $this->linkPreviewOptions;
    }

    /**
     * @return SuggestedPostInfo|null
     */
    public function getSuggestedPostInfo(): ?SuggestedPostInfo
    {
        return $this->suggestedPostInfo;
    }

    /**
     * @return string|null
     */
    public function getEffectId(): ?string
    {
        return $this->effectId;
    }

    /**
     * @return RichMessage|null
     */
    public function getRichMessage(): ?RichMessage
    {
        return $this->richMessage;
    }

    /**
     * @return Animation|null
     */
    public function getAnimation(): ?Animation
    {
        return $this->animation;
    }

    /**
     * @return Audio|null
     */
    public function getAudio(): ?Audio
    {
        return $this->audio;
    }

    /**
     * @return Document|null
     */
    public function getDocument(): ?Document
    {
        return $this->document;
    }

    /**
     * @return LivePhoto|null
     */
    public function getLivePhoto(): ?LivePhoto
    {
        return $this->livePhoto;
    }

    /**
     * @return PaidMediaInfo|null
     */
    public function getPaidMedia(): ?PaidMediaInfo
    {
        return $this->paidMedia;
    }

    /**
     * @return PhotoSize[]|null
     */
    public function getPhoto(): ?array
    {
        return $this->photo;
    }

    /**
     * @return Sticker|null
     */
    public function getSticker(): ?Sticker
    {
        return $this->sticker;
    }

    /**
     * @return Story|null
     */
    public function getStory(): ?Story
    {
        return $this->story;
    }

    /**
     * @return Video|null
     */
    public function getVideo(): ?Video
    {
        return $this->video;
    }

    /**
     * @return VideoNote|null
     */
    public function getVideoNote(): ?VideoNote
    {
        return $this->videoNote;
    }

    /**
     * @return Voice|null
     */
    public function getVoice(): ?Voice
    {
        return $this->voice;
    }

    /**
     * @return string|null
     */
    public function getCaption(): ?string
    {
        return $this->caption;
    }

    /**
     * @return MessageEntity[]|null
     */
    public function getCaptionEntities(): ?array
    {
        return $this->captionEntities;
    }

    /**
     * @return bool|null
     */
    public function getShowCaptionAboveMedia(): ?bool
    {
        return $this->showCaptionAboveMedia;
    }

    /**
     * @return bool|null
     */
    public function getHasMediaSpoiler(): ?bool
    {
        return $this->hasMediaSpoiler;
    }

    /**
     * @return Checklist|null
     */
    public function getChecklist(): ?Checklist
    {
        return $this->checklist;
    }

    /**
     * @return Contact|null
     */
    public function getContact(): ?Contact
    {
        return $this->contact;
    }

    /**
     * @return Dice|null
     */
    public function getDice(): ?Dice
    {
        return $this->dice;
    }

    /**
     * @return Game|null
     */
    public function getGame(): ?Game
    {
        return $this->game;
    }

    /**
     * @return Poll|null
     */
    public function getPoll(): ?Poll
    {
        return $this->poll;
    }

    /**
     * @return Venue|null
     */
    public function getVenue(): ?Venue
    {
        return $this->venue;
    }

    /**
     * @return Location|null
     */
    public function getLocation(): ?Location
    {
        return $this->location;
    }

    /**
     * @return User[]|null
     */
    public function getNewChatMembers(): ?array
    {
        return $this->newChatMembers;
    }

    /**
     * @return User|null
     */
    public function getLeftChatMember(): ?User
    {
        return $this->leftChatMember;
    }

    /**
     * @return ChatOwnerLeft|null
     */
    public function getChatOwnerLeft(): ?ChatOwnerLeft
    {
        return $this->chatOwnerLeft;
    }

    /**
     * @return ChatOwnerChanged|null
     */
    public function getChatOwnerChanged(): ?ChatOwnerChanged
    {
        return $this->chatOwnerChanged;
    }

    /**
     * @return string|null
     */
    public function getNewChatTitle(): ?string
    {
        return $this->newChatTitle;
    }

    /**
     * @return PhotoSize[]|null
     */
    public function getNewChatPhoto(): ?array
    {
        return $this->newChatPhoto;
    }

    /**
     * @return bool|null
     */
    public function getDeleteChatPhoto(): ?bool
    {
        return $this->deleteChatPhoto;
    }

    /**
     * @return bool|null
     */
    public function getGroupChatCreated(): ?bool
    {
        return $this->groupChatCreated;
    }

    /**
     * @return bool|null
     */
    public function getSupergroupChatCreated(): ?bool
    {
        return $this->supergroupChatCreated;
    }

    /**
     * @return bool|null
     */
    public function getChannelChatCreated(): ?bool
    {
        return $this->channelChatCreated;
    }

    /**
     * @return MessageAutoDeleteTimerChanged|null
     */
    public function getMessageAutoDeleteTimerChanged(): ?MessageAutoDeleteTimerChanged
    {
        return $this->messageAutoDeleteTimerChanged;
    }

    /**
     * @return int|null
     */
    public function getMigrateToChatId(): ?int
    {
        return $this->migrateToChatId;
    }

    /**
     * @return int|null
     */
    public function getMigrateFromChatId(): ?int
    {
        return $this->migrateFromChatId;
    }

    /**
     * @return MaybeInaccessibleMessage|null
     */
    public function getPinnedMessage(): ?MaybeInaccessibleMessage
    {
        return $this->pinnedMessage;
    }

    /**
     * @return Invoice|null
     */
    public function getInvoice(): ?Invoice
    {
        return $this->invoice;
    }

    /**
     * @return SuccessfulPayment|null
     */
    public function getSuccessfulPayment(): ?SuccessfulPayment
    {
        return $this->successfulPayment;
    }

    /**
     * @return RefundedPayment|null
     */
    public function getRefundedPayment(): ?RefundedPayment
    {
        return $this->refundedPayment;
    }

    /**
     * @return UsersShared|null
     */
    public function getUsersShared(): ?UsersShared
    {
        return $this->usersShared;
    }

    /**
     * @return ChatShared|null
     */
    public function getChatShared(): ?ChatShared
    {
        return $this->chatShared;
    }

    /**
     * @return GiftInfo|null
     */
    public function getGift(): ?GiftInfo
    {
        return $this->gift;
    }

    /**
     * @return UniqueGiftInfo|null
     */
    public function getUniqueGift(): ?UniqueGiftInfo
    {
        return $this->uniqueGift;
    }

    /**
     * @return GiftInfo|null
     */
    public function getGiftUpgradeSent(): ?GiftInfo
    {
        return $this->giftUpgradeSent;
    }

    /**
     * @return string|null
     */
    public function getConnectedWebsite(): ?string
    {
        return $this->connectedWebsite;
    }

    /**
     * @return WriteAccessAllowed|null
     */
    public function getWriteAccessAllowed(): ?WriteAccessAllowed
    {
        return $this->writeAccessAllowed;
    }

    /**
     * @return PassportData|null
     */
    public function getPassportData(): ?PassportData
    {
        return $this->passportData;
    }

    /**
     * @return ProximityAlertTriggered|null
     */
    public function getProximityAlertTriggered(): ?ProximityAlertTriggered
    {
        return $this->proximityAlertTriggered;
    }

    /**
     * @return ChatBoostAdded|null
     */
    public function getBoostAdded(): ?ChatBoostAdded
    {
        return $this->boostAdded;
    }

    /**
     * @return ChatBackground|null
     */
    public function getChatBackgroundSet(): ?ChatBackground
    {
        return $this->chatBackgroundSet;
    }

    /**
     * @return ChecklistTasksDone|null
     */
    public function getChecklistTasksDone(): ?ChecklistTasksDone
    {
        return $this->checklistTasksDone;
    }

    /**
     * @return ChecklistTasksAdded|null
     */
    public function getChecklistTasksAdded(): ?ChecklistTasksAdded
    {
        return $this->checklistTasksAdded;
    }

    /**
     * @return DirectMessagePriceChanged|null
     */
    public function getDirectMessagePriceChanged(): ?DirectMessagePriceChanged
    {
        return $this->directMessagePriceChanged;
    }

    /**
     * @return ForumTopicCreated|null
     */
    public function getForumTopicCreated(): ?ForumTopicCreated
    {
        return $this->forumTopicCreated;
    }

    /**
     * @return ForumTopicEdited|null
     */
    public function getForumTopicEdited(): ?ForumTopicEdited
    {
        return $this->forumTopicEdited;
    }

    /**
     * @return ForumTopicClosed|null
     */
    public function getForumTopicClosed(): ?ForumTopicClosed
    {
        return $this->forumTopicClosed;
    }

    /**
     * @return ForumTopicReopened|null
     */
    public function getForumTopicReopened(): ?ForumTopicReopened
    {
        return $this->forumTopicReopened;
    }

    /**
     * @return GeneralForumTopicHidden|null
     */
    public function getGeneralForumTopicHidden(): ?GeneralForumTopicHidden
    {
        return $this->generalForumTopicHidden;
    }

    /**
     * @return GeneralForumTopicUnhidden|null
     */
    public function getGeneralForumTopicUnhidden(): ?GeneralForumTopicUnhidden
    {
        return $this->generalForumTopicUnhidden;
    }

    /**
     * @return GiveawayCreated|null
     */
    public function getGiveawayCreated(): ?GiveawayCreated
    {
        return $this->giveawayCreated;
    }

    /**
     * @return Giveaway|null
     */
    public function getGiveaway(): ?Giveaway
    {
        return $this->giveaway;
    }

    /**
     * @return GiveawayWinners|null
     */
    public function getGiveawayWinners(): ?GiveawayWinners
    {
        return $this->giveawayWinners;
    }

    /**
     * @return GiveawayCompleted|null
     */
    public function getGiveawayCompleted(): ?GiveawayCompleted
    {
        return $this->giveawayCompleted;
    }

    /**
     * @return ManagedBotCreated|null
     */
    public function getManagedBotCreated(): ?ManagedBotCreated
    {
        return $this->managedBotCreated;
    }

    /**
     * @return PaidMessagePriceChanged|null
     */
    public function getPaidMessagePriceChanged(): ?PaidMessagePriceChanged
    {
        return $this->paidMessagePriceChanged;
    }

    /**
     * @return PollOptionAdded|null
     */
    public function getPollOptionAdded(): ?PollOptionAdded
    {
        return $this->pollOptionAdded;
    }

    /**
     * @return PollOptionDeleted|null
     */
    public function getPollOptionDeleted(): ?PollOptionDeleted
    {
        return $this->pollOptionDeleted;
    }

    /**
     * @return SuggestedPostApproved|null
     */
    public function getSuggestedPostApproved(): ?SuggestedPostApproved
    {
        return $this->suggestedPostApproved;
    }

    /**
     * @return SuggestedPostApprovalFailed|null
     */
    public function getSuggestedPostApprovalFailed(): ?SuggestedPostApprovalFailed
    {
        return $this->suggestedPostApprovalFailed;
    }

    /**
     * @return SuggestedPostDeclined|null
     */
    public function getSuggestedPostDeclined(): ?SuggestedPostDeclined
    {
        return $this->suggestedPostDeclined;
    }

    /**
     * @return SuggestedPostPaid|null
     */
    public function getSuggestedPostPaid(): ?SuggestedPostPaid
    {
        return $this->suggestedPostPaid;
    }

    /**
     * @return SuggestedPostRefunded|null
     */
    public function getSuggestedPostRefunded(): ?SuggestedPostRefunded
    {
        return $this->suggestedPostRefunded;
    }

    /**
     * @return VideoChatScheduled|null
     */
    public function getVideoChatScheduled(): ?VideoChatScheduled
    {
        return $this->videoChatScheduled;
    }

    /**
     * @return VideoChatStarted|null
     */
    public function getVideoChatStarted(): ?VideoChatStarted
    {
        return $this->videoChatStarted;
    }

    /**
     * @return VideoChatEnded|null
     */
    public function getVideoChatEnded(): ?VideoChatEnded
    {
        return $this->videoChatEnded;
    }

    /**
     * @return VideoChatParticipantsInvited|null
     */
    public function getVideoChatParticipantsInvited(): ?VideoChatParticipantsInvited
    {
        return $this->videoChatParticipantsInvited;
    }

    /**
     * @return WebAppData|null
     */
    public function getWebAppData(): ?WebAppData
    {
        return $this->webAppData;
    }

    /**
     * @return InlineKeyboardMarkup|null
     */
    public function getReplyMarkup(): ?InlineKeyboardMarkup
    {
        return $this->replyMarkup;
    }
}
