<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object contains information about a message that is being replied to, which may come from another chat or forum topic.
 *
 * @see https://core.telegram.org/bots/api#externalreplyinfo
 */
final class ExternalReplyInfo
{
    /**
     * @param MessageOrigin $origin Origin of the message replied to by the given message
     * @param Chat|null $chat Optional. Chat the original message belongs to. Available only if the chat is a supergroup or a channel.
     * @param int|null $messageId Optional. Unique message identifier inside the original chat. Available only if the original chat is a supergroup or a channel.
     * @param LinkPreviewOptions|null $linkPreviewOptions Optional. Options used for link preview generation for the original message, if it is a text message
     * @param Animation|null $animation Optional. Message is an animation, information about the animation
     * @param Audio|null $audio Optional. Message is an audio file, information about the file
     * @param Document|null $document Optional. Message is a general file, information about the file
     * @param LivePhoto|null $livePhoto Optional. Message is a live photo, information about the live photo
     * @param PaidMediaInfo|null $paidMedia Optional. Message contains paid media; information about the paid media
     * @param PhotoSize[]|null $photo Optional. Message is a photo, available sizes of the photo
     * @param Sticker|null $sticker Optional. Message is a sticker, information about the sticker
     * @param Story|null $story Optional. Message is a forwarded story
     * @param Video|null $video Optional. Message is a video, information about the video
     * @param VideoNote|null $videoNote Optional. Message is a video note, information about the video message
     * @param Voice|null $voice Optional. Message is a voice message, information about the file
     * @param bool|null $hasMediaSpoiler Optional. True, if the message media is covered by a spoiler animation
     * @param Checklist|null $checklist Optional. Message is a checklist
     * @param Contact|null $contact Optional. Message is a shared contact, information about the contact
     * @param Dice|null $dice Optional. Message is a dice with random value
     * @param Game|null $game Optional. Message is a game, information about the game. More about games: https://core.telegram.org/bots/api#games
     * @param Giveaway|null $giveaway Optional. Message is a scheduled giveaway, information about the giveaway
     * @param GiveawayWinners|null $giveawayWinners Optional. A giveaway with public winners was completed
     * @param Invoice|null $invoice Optional. Message is an invoice for a payment, information about the invoice. More about payments: https://core.telegram.org/bots/api#payments
     * @param Location|null $location Optional. Message is a shared location, information about the location
     * @param Poll|null $poll Optional. Message is a native poll, information about the poll
     * @param Venue|null $venue Optional. Message is a venue, information about the venue
    */
    public function __construct
    (
         private MessageOrigin $origin,
         private ?Chat $chat = null,
         private ?int $messageId = null,
         private ?LinkPreviewOptions $linkPreviewOptions = null,
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
         private ?bool $hasMediaSpoiler = null,
         private ?Checklist $checklist = null,
         private ?Contact $contact = null,
         private ?Dice $dice = null,
         private ?Game $game = null,
         private ?Giveaway $giveaway = null,
         private ?GiveawayWinners $giveawayWinners = null,
         private ?Invoice $invoice = null,
         private ?Location $location = null,
         private ?Poll $poll = null,
         private ?Venue $venue = null
    ) {}
    
    /**
     * @return MessageOrigin
     */
    public function getOrigin(): MessageOrigin
    {
        return $this->origin;
    }

    /**
     * @return Chat|null
     */
    public function getChat(): ?Chat
    {
        return $this->chat;
    }

    /**
     * @return int|null
     */
    public function getMessageId(): ?int
    {
        return $this->messageId;
    }

    /**
     * @return LinkPreviewOptions|null
     */
    public function getLinkPreviewOptions(): ?LinkPreviewOptions
    {
        return $this->linkPreviewOptions;
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
     * @return Invoice|null
     */
    public function getInvoice(): ?Invoice
    {
        return $this->invoice;
    }

    /**
     * @return Location|null
     */
    public function getLocation(): ?Location
    {
        return $this->location;
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
}
