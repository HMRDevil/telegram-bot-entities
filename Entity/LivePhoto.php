<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents a live photo.
 *
 * @see https://core.telegram.org/bots/api#livephoto
 */
final class LivePhoto
{
    /**
     * @param string $fileId Identifier for the video file which can be used to download or reuse the file
     * @param string $fileUniqueId Unique identifier for the video file which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @param int $width Video width as defined by the sender
     * @param int $height Video height as defined by the sender
     * @param int $duration Duration of the video in seconds as defined by the sender
     * @param PhotoSize[]|null $photo Optional. Available sizes of the corresponding static photo
     * @param string|null $mimeType Optional. MIME type of the file as defined by the sender
     * @param int|null $fileSize Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
    */
    public function __construct
    (
         private string $fileId,
         private string $fileUniqueId,
         private int $width,
         private int $height,
         private int $duration,
         private ?array $photo = null,
         private ?string $mimeType = null,
         private ?int $fileSize = null
    ) {}
    
    /**
     * @return string
     */
    public function getFileId(): string
    {
        return $this->fileId;
    }

    /**
     * @return string
     */
    public function getFileUniqueId(): string
    {
        return $this->fileUniqueId;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * @return PhotoSize[]|null
     */
    public function getPhoto(): ?array
    {
        return $this->photo;
    }

    /**
     * @return string|null
     */
    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }

    /**
     * @return int|null
     */
    public function getFileSize(): ?int
    {
        return $this->fileSize;
    }
}
