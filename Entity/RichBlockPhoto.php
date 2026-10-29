<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A block with a photo, corresponding to the HTML tag <img>.
 *
 * @see https://core.telegram.org/bots/api#richblockphoto
 */
final class RichBlockPhoto
{
    /**
     * @param string $type Type of the block, always "photo"
     * @param PhotoSize[] $photo Available sizes of the photo
     * @param bool|null $hasSpoiler Optional. True, if the media preview is covered by a spoiler animation
     * @param RichBlockCaption|null $caption Optional. Caption of the block
    */
    public function __construct
    (
         private string $type,
         private array $photo,
         private ?bool $hasSpoiler = null,
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
     * @return PhotoSize[]
     */
    public function getPhoto(): array
    {
        return $this->photo;
    }

    /**
     * @return bool|null
     */
    public function getHasSpoiler(): ?bool
    {
        return $this->hasSpoiler;
    }

    /**
     * @return RichBlockCaption|null
     */
    public function getCaption(): ?RichBlockCaption
    {
        return $this->caption;
    }
}
