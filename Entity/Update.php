<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents an incoming update.
 * At most one of the optional fields can be present in any given update.
 *
 * @see https://core.telegram.org/bots/api#update
 */
final class Update
{
    /**
     * @param int $updateId The update's unique identifier. Update identifiers start from a certain positive number and increase sequentially. This identifier becomes especially handy if you're using webhooks, since it allows you to ignore repeated updates or to restore the correct update sequence, should they get out of order. If there are no new updates for at least a week, then identifier of the next update will be chosen randomly instead of sequentially.
     * @param Message|null $message Optional. New incoming message of any kind - text, photo, sticker, etc.
     * @param Message|null $editedMessage Optional. New version of a message that is known to the bot and was edited. This update may at times be triggered by changes to message fields that are either unavailable or not actively used by your bot.
     * @param Message|null $channelPost Optional. New incoming channel post of any kind - text, photo, sticker, etc.
     * @param Message|null $editedChannelPost Optional. New version of a channel post that is known to the bot and was edited. This update may at times be triggered by changes to message fields that are either unavailable or not actively used by your bot.
     * @param BusinessConnection|null $businessConnection Optional. The bot was connected to or disconnected from a business account, or a user edited an existing connection with the bot
     * @param Message|null $businessMessage Optional. New message from a connected business account
     * @param Message|null $editedBusinessMessage Optional. New version of a message from a connected business account
     * @param BusinessMessagesDeleted|null $deletedBusinessMessages Optional. Messages were deleted from a connected business account
     * @param Message|null $guestMessage Optional. New guest message. The bot can use the field Message.guest_query_id and the method answerGuestQuery to send a message in response.
     * @param MessageReactionUpdated|null $messageReaction Optional. A reaction to a message was changed by a user. The bot must be an administrator in the chat and must explicitly specify "message_reaction" in the list of allowed_updates to receive these updates. The update isn't received for reactions set by bots.
     * @param MessageReactionCountUpdated|null $messageReactionCount Optional. Reactions to a message with anonymous reactions were changed. The bot must be an administrator in the chat and must explicitly specify "message_reaction_count" in the list of allowed_updates to receive these updates. The updates are grouped and can be sent with delay up to a few minutes.
     * @param InlineQuery|null $inlineQuery Optional. New incoming inline query
     * @param ChosenInlineResult|null $chosenInlineResult Optional. The result of an inline query that was chosen by a user and sent to their chat partner. Please see our documentation on the feedback collecting for details on how to enable these updates for your bot.
     * @param CallbackQuery|null $callbackQuery Optional. New incoming callback query
     * @param ShippingQuery|null $shippingQuery Optional. New incoming shipping query. Only for invoices with flexible price.
     * @param PreCheckoutQuery|null $preCheckoutQuery Optional. New incoming pre-checkout query. Contains full information about checkout.
     * @param PaidMediaPurchased|null $purchasedPaidMedia Optional. A user purchased paid media with a non-empty payload sent by the bot in a non-channel chat
     * @param Poll|null $poll Optional. New poll state. Bots receive only updates about manually stopped polls and polls, which are sent by the bot.
     * @param PollAnswer|null $pollAnswer Optional. A user changed their answer in a non-anonymous poll. Bots receive new votes only in polls that were sent by the bot itself.
     * @param ChatMemberUpdated|null $myChatMember Optional. The bot's chat member status was updated in a chat. For private chats, this update is received only when the bot is blocked or unblocked by the user.
     * @param ChatMemberUpdated|null $chatMember Optional. A chat member's status was updated in a chat. The bot must be an administrator in the chat and must explicitly specify "chat_member" in the list of allowed_updates to receive these updates.
     * @param ChatJoinRequest|null $chatJoinRequest Optional. A request to join the chat has been sent. The bot must have the can_invite_users administrator right in the chat to receive these updates.
     * @param ChatBoostUpdated|null $chatBoost Optional. A chat boost was added or changed. The bot must be an administrator in the chat to receive these updates.
     * @param ChatBoostRemoved|null $removedChatBoost Optional. A boost was removed from a chat. The bot must be an administrator in the chat to receive these updates.
     * @param ManagedBotUpdated|null $managedBot Optional. A new bot was created to be managed by the bot, or token or owner of a managed bot was changed
    */
    public function __construct
    (
         private int $updateId,
         private ?Message $message = null,
         private ?Message $editedMessage = null,
         private ?Message $channelPost = null,
         private ?Message $editedChannelPost = null,
         private ?BusinessConnection $businessConnection = null,
         private ?Message $businessMessage = null,
         private ?Message $editedBusinessMessage = null,
         private ?BusinessMessagesDeleted $deletedBusinessMessages = null,
         private ?Message $guestMessage = null,
         private ?MessageReactionUpdated $messageReaction = null,
         private ?MessageReactionCountUpdated $messageReactionCount = null,
         private ?InlineQuery $inlineQuery = null,
         private ?ChosenInlineResult $chosenInlineResult = null,
         private ?CallbackQuery $callbackQuery = null,
         private ?ShippingQuery $shippingQuery = null,
         private ?PreCheckoutQuery $preCheckoutQuery = null,
         private ?PaidMediaPurchased $purchasedPaidMedia = null,
         private ?Poll $poll = null,
         private ?PollAnswer $pollAnswer = null,
         private ?ChatMemberUpdated $myChatMember = null,
         private ?ChatMemberUpdated $chatMember = null,
         private ?ChatJoinRequest $chatJoinRequest = null,
         private ?ChatBoostUpdated $chatBoost = null,
         private ?ChatBoostRemoved $removedChatBoost = null,
         private ?ManagedBotUpdated $managedBot = null
    ) {}
    
    /**
     * @return int
     */
    public function getUpdateId(): int
    {
        return $this->updateId;
    }

    /**
     * @return Message|null
     */
    public function getMessage(): ?Message
    {
        return $this->message;
    }

    /**
     * @return Message|null
     */
    public function getEditedMessage(): ?Message
    {
        return $this->editedMessage;
    }

    /**
     * @return Message|null
     */
    public function getChannelPost(): ?Message
    {
        return $this->channelPost;
    }

    /**
     * @return Message|null
     */
    public function getEditedChannelPost(): ?Message
    {
        return $this->editedChannelPost;
    }

    /**
     * @return BusinessConnection|null
     */
    public function getBusinessConnection(): ?BusinessConnection
    {
        return $this->businessConnection;
    }

    /**
     * @return Message|null
     */
    public function getBusinessMessage(): ?Message
    {
        return $this->businessMessage;
    }

    /**
     * @return Message|null
     */
    public function getEditedBusinessMessage(): ?Message
    {
        return $this->editedBusinessMessage;
    }

    /**
     * @return BusinessMessagesDeleted|null
     */
    public function getDeletedBusinessMessages(): ?BusinessMessagesDeleted
    {
        return $this->deletedBusinessMessages;
    }

    /**
     * @return Message|null
     */
    public function getGuestMessage(): ?Message
    {
        return $this->guestMessage;
    }

    /**
     * @return MessageReactionUpdated|null
     */
    public function getMessageReaction(): ?MessageReactionUpdated
    {
        return $this->messageReaction;
    }

    /**
     * @return MessageReactionCountUpdated|null
     */
    public function getMessageReactionCount(): ?MessageReactionCountUpdated
    {
        return $this->messageReactionCount;
    }

    /**
     * @return InlineQuery|null
     */
    public function getInlineQuery(): ?InlineQuery
    {
        return $this->inlineQuery;
    }

    /**
     * @return ChosenInlineResult|null
     */
    public function getChosenInlineResult(): ?ChosenInlineResult
    {
        return $this->chosenInlineResult;
    }

    /**
     * @return CallbackQuery|null
     */
    public function getCallbackQuery(): ?CallbackQuery
    {
        return $this->callbackQuery;
    }

    /**
     * @return ShippingQuery|null
     */
    public function getShippingQuery(): ?ShippingQuery
    {
        return $this->shippingQuery;
    }

    /**
     * @return PreCheckoutQuery|null
     */
    public function getPreCheckoutQuery(): ?PreCheckoutQuery
    {
        return $this->preCheckoutQuery;
    }

    /**
     * @return PaidMediaPurchased|null
     */
    public function getPurchasedPaidMedia(): ?PaidMediaPurchased
    {
        return $this->purchasedPaidMedia;
    }

    /**
     * @return Poll|null
     */
    public function getPoll(): ?Poll
    {
        return $this->poll;
    }

    /**
     * @return PollAnswer|null
     */
    public function getPollAnswer(): ?PollAnswer
    {
        return $this->pollAnswer;
    }

    /**
     * @return ChatMemberUpdated|null
     */
    public function getMyChatMember(): ?ChatMemberUpdated
    {
        return $this->myChatMember;
    }

    /**
     * @return ChatMemberUpdated|null
     */
    public function getChatMember(): ?ChatMemberUpdated
    {
        return $this->chatMember;
    }

    /**
     * @return ChatJoinRequest|null
     */
    public function getChatJoinRequest(): ?ChatJoinRequest
    {
        return $this->chatJoinRequest;
    }

    /**
     * @return ChatBoostUpdated|null
     */
    public function getChatBoost(): ?ChatBoostUpdated
    {
        return $this->chatBoost;
    }

    /**
     * @return ChatBoostRemoved|null
     */
    public function getRemovedChatBoost(): ?ChatBoostRemoved
    {
        return $this->removedChatBoost;
    }

    /**
     * @return ManagedBotUpdated|null
     */
    public function getManagedBot(): ?ManagedBotUpdated
    {
        return $this->managedBot;
    }
}
