<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A block with a voice note, corresponding to the HTML tag <audio>.
 *
 * @see https://core.telegram.org/bots/api#richblockvoicenote
 */
final class RichBlockVoiceNote
{
    /**
     * @var string $type Type of the block, always “voice_note”
     */
    private string $type = 'voice_note';

    /**
     * @param Voice $voiceNote The voice note
     * @param RichBlockCaption|null $caption Optional. Caption of the block
    */
    public function __construct
    (
         private Voice $voiceNote,
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
     * @return Voice
     */
    public function getVoiceNote(): Voice
    {
        return $this->voiceNote;
    }

    /**
     * @return RichBlockCaption|null
     */
    public function getCaption(): ?RichBlockCaption
    {
        return $this->caption;
    }
}
