<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a photo to post as a story.
 *
 * @see https://core.telegram.org/bots/api#inputstorycontentphoto
 */
final class InputStoryContentPhoto
{
    /**
     * @param string $type Type of the content, must be photo
     * @param string $photo The photo to post as a story. The photo must be of the size 1080x1920 and must not exceed 10 MB. The photo can't be reused and can only be uploaded as a new file, so you can pass "attach://<file_attach_name>" if the photo was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files: https://core.telegram.org/bots/api#sending-files
    */
    public function __construct
    (
         private string $type,
         private string $photo
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
    public function getPhoto(): string
    {
        return $this->photo;
    }
}
