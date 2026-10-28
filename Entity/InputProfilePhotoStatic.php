<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A static profile photo in the .JPG format.
 *
 * @see https://core.telegram.org/bots/api#inputprofilephotostatic
 */
final class InputProfilePhotoStatic
{
    /**
     * @param string $type Type of the profile photo, must be static
     * @param string $photo The static profile photo. Profile photos can't be reused and can only be uploaded as a new file, so you can pass "attach://<file_attach_name>" if the photo was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files: https://core.telegram.org/bots/api#sending-files
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
