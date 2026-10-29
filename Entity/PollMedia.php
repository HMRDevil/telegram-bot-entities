<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * At most one of the optional fields can be present in any given object.
 *
 * @see https://core.telegram.org/bots/api#pollmedia
 */
final class PollMedia
{
    /**
     * @param Animation|null $animation Optional. Media is an animation, information about the animation
     * @param Audio|null $audio Optional. Media is an audio file, information about the file; currently, can't be received in a poll option
     * @param Document|null $document Optional. Media is a general file, information about the file; currently, can't be received in a poll option
     * @param Link|null $link Optional. The HTTP link attached to the poll option
     * @param LivePhoto|null $livePhoto Optional. Media is a live photo, information about the live photo
     * @param Location|null $location Optional. Media is a shared location, information about the location
     * @param PhotoSize[]|null $photo Optional. Media is a photo, available sizes of the photo
     * @param Sticker|null $sticker Optional. Media is a sticker, information about the sticker; currently, for poll options only
     * @param Venue|null $venue Optional. Media is a venue, information about the venue
     * @param Video|null $video Optional. Media is a video, information about the video
    */
    public function __construct
    (
         private ?Animation $animation = null,
         private ?Audio $audio = null,
         private ?Document $document = null,
         private ?Link $link = null,
         private ?LivePhoto $livePhoto = null,
         private ?Location $location = null,
         private ?array $photo = null,
         private ?Sticker $sticker = null,
         private ?Venue $venue = null,
         private ?Video $video = null
    ) {}
    
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
     * @return Link|null
     */
    public function getLink(): ?Link
    {
        return $this->link;
    }

    /**
     * @return LivePhoto|null
     */
    public function getLivePhoto(): ?LivePhoto
    {
        return $this->livePhoto;
    }

    /**
     * @return Location|null
     */
    public function getLocation(): ?Location
    {
        return $this->location;
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
     * @return Venue|null
     */
    public function getVenue(): ?Venue
    {
        return $this->venue;
    }

    /**
     * @return Video|null
     */
    public function getVideo(): ?Video
    {
        return $this->video;
    }
}
