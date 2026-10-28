<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * The paid media to send is a photo.
 *
 * @see https://core.telegram.org/bots/api#inputpaidmediaphoto
 */
final class InputPaidMediaPhoto
{
    /**
     * @param string $type Type of the media, must be photo
     * @param string $media File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass "attach://<file_attach_name>" to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files: https://core.telegram.org/bots/api#sending-files
    */
    public function __construct
    (
         private string $type,
         private string $media
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getMedia(): string
    {
        return $this->media;
    }
}
