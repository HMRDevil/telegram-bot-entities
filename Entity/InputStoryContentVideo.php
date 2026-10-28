<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a video to post as a story.
 *
 * @see https://core.telegram.org/bots/api#inputstorycontentvideo
 */
final class InputStoryContentVideo
{
    /**
     * @param string $type Type of the content, must be video
     * @param string $video The video to post as a story. The video must be of the size 720x1280, streamable, encoded with H.265 codec, with key frames added each second in the MPEG4 format, and must not exceed 30 MB. The video can't be reused and can only be uploaded as a new file, so you can pass "attach://<file_attach_name>" if the video was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files: https://core.telegram.org/bots/api#sending-files
     * @param float|null $duration Optional. Precise duration of the video in seconds; 0-60
     * @param float|null $coverFrameTimestamp Optional. Timestamp in seconds of the frame that will be used as the static cover for the story. Defaults to 0.0.
     * @param bool|null $isAnimation Optional. Pass True if the video has no sound
    */
    public function __construct
    (
         private string $type,
         private string $video,
         private ?float $duration = null,
         private ?float $coverFrameTimestamp = null,
         private ?bool $isAnimation = null
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
    public function getVideo(): string
    {
        return $this->video;
    }

    /**
     * @return float|null
     */
    public function getDuration(): ?float
    {
        return $this->duration;
    }

    /**
     * @return float|null
     */
    public function getCoverFrameTimestamp(): ?float
    {
        return $this->coverFrameTimestamp;
    }

    /**
     * @return bool|null
     */
    public function getIsAnimation(): ?bool
    {
        return $this->isAnimation;
    }
}
