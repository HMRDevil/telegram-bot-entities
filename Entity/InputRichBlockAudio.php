<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A block with a music file, corresponding to the HTML tag <audio>.
 *
 * @see https://core.telegram.org/bots/api#inputrichblockaudio
 */
final class InputRichBlockAudio
{
    /**
     * @param string $type Type of the block, always "audio"
     * @param InputMediaAudio $audio The audio. Caption is ignored.
     * @param RichBlockCaption|null $caption Optional. Caption of the block
    */
    public function __construct
    (
         private string $type,
         private InputMediaAudio $audio,
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
     * @return InputMediaAudio
     */
    public function getAudio(): InputMediaAudio
    {
        return $this->audio;
    }

    /**
     * @return RichBlockCaption|null
     */
    public function getCaption(): ?RichBlockCaption
    {
        return $this->caption;
    }
}
