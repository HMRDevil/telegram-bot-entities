<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * An animated profile photo in the MPEG4 format.
 *
 * @see https://core.telegram.org/bots/api#inputprofilephotoanimated
 */
final class InputProfilePhotoAnimated
{
    /**
     * @param string $type Type of the profile photo, must be animated
     * @param string $animation The animated profile photo. Profile photos can't be reused and can only be uploaded as a new file, so you can pass "attach://<file_attach_name>" if the photo was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files: https://core.telegram.org/bots/api#sending-files
     * @param float|null $mainFrameTimestamp Optional. Timestamp in seconds of the frame that will be used as the static profile photo. Defaults to 0.0.
    */
    public function __construct
    (
         private string $type,
         private string $animation,
         private ?float $mainFrameTimestamp = null
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
    public function getAnimation(): string
    {
        return $this->animation;
    }

    /**
     * @return float|null
     */
    public function getMainFrameTimestamp(): ?float
    {
        return $this->mainFrameTimestamp;
    }
}
