<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a media element embedded in an outgoing rich message.
 *
 * @see https://core.telegram.org/bots/api#inputrichmessagemedia
 */
final class InputRichMessageMedia
{
    /**
     * @param string $id Unique identifier of the media used in a tg://photo?id=, tg://video?id=, or tg://audio?id= link. 1-64 characters, only A-Z, a-z, 0-9, _ and - are allowed.
     * @param  $media The media to be sent. Everything except the media itself and its properties is ignored.
    */
    public function __construct
    (
         private string $id,
         private  $media
    ) {}
    
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return 
     */
    public function getMedia(): 
    {
        return $this->media;
    }
}
