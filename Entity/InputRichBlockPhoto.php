<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A block with a photo, corresponding to the HTML tag <img>.
 *
 * @see https://core.telegram.org/bots/api#inputrichblockphoto
 */
final class InputRichBlockPhoto
{
    /**
     * @param string $type Type of the block, always "photo"
     * @param InputMediaPhoto $photo The photo. Caption is ignored.
     * @param RichBlockCaption|null $caption Optional. Caption of the block
    */
    public function __construct
    (
         private string $type,
         private InputMediaPhoto $photo,
         private ?RichBlockCaption $caption = null
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return InputMediaPhoto
     */
    public function getPhoto(): InputMediaPhoto
    {
        return $this->photo;
    }

    /**
     * @return RichBlockCaption|null
     */
    public function getCaption(): ?RichBlockCaption
    {
        return $this->caption;
    }
}
