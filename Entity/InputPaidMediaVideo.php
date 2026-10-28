<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * The paid media to send is a video.
 *
 * @see https://core.telegram.org/bots/api#inputpaidmediavideo
 */
final class InputPaidMediaVideo
{
    /**
     * @param string $type Type of the media, must be video
     * @param string $media File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass "attach://<file_attach_name>" to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files: https://core.telegram.org/bots/api#sending-files
     * @param string|null $thumbnail Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass "attach://<file_attach_name>" if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files: https://core.telegram.org/bots/api#sending-files
     * @param string|null $cover Optional. Cover for the video in the message. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass "attach://<file_attach_name>" to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files: https://core.telegram.org/bots/api#sending-files
     * @param int|null $startTimestamp Optional. Start timestamp for the video in the message
     * @param int|null $width Optional. Video width
     * @param int|null $height Optional. Video height
     * @param int|null $duration Optional. Video duration in seconds
     * @param bool|null $supportsStreaming Optional. Pass True if the uploaded video is suitable for streaming
    */
    public function __construct
    (
         private string $type,
         private string $media,
         private ?string $thumbnail = null,
         private ?string $cover = null,
         private ?int $startTimestamp = null,
         private ?int $width = null,
         private ?int $height = null,
         private ?int $duration = null,
         private ?bool $supportsStreaming = null
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

    /**
     * @return string|null
     */
    public function getThumbnail(): ?string
    {
        return $this->thumbnail;
    }

    /**
     * @return string|null
     */
    public function getCover(): ?string
    {
        return $this->cover;
    }

    /**
     * @return int|null
     */
    public function getStartTimestamp(): ?int
    {
        return $this->startTimestamp;
    }

    /**
     * @return int|null
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * @return int|null
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * @return int|null
     */
    public function getDuration(): ?int
    {
        return $this->duration;
    }

    /**
     * @return bool|null
     */
    public function getSupportsStreaming(): ?bool
    {
        return $this->supportsStreaming;
    }
}
