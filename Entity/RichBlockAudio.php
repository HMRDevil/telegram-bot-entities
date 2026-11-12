<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A block with a music file, corresponding to the HTML tag <audio>.
 *
 * @see https://core.telegram.org/bots/api#richblockaudio
 */
final class RichBlockAudio
{
    /**
     * @var string $type Type of the block, always “audio”
     */
    private string $type = 'audio';

    /**
     * @param Audio $audio The audio
     * @param RichBlockCaption|null $caption Optional. Caption of the block
    */
    public function __construct
    (
         private Audio $audio,
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
     * @return Audio
     */
    public function getAudio(): Audio
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
