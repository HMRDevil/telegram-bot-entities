<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A block with a voice note, corresponding to the HTML tag <audio>.
 *
 * @see https://core.telegram.org/bots/api#inputrichblockvoicenote
 */
final class InputRichBlockVoiceNote
{
    /**
     * @param string $type Type of the block, always "voice_note"
     * @param InputMediaVoiceNote $voiceNote The voice note. Caption is ignored.
     * @param RichBlockCaption|null $caption Optional. Caption of the block
    */
    public function __construct
    (
         private string $type,
         private InputMediaVoiceNote $voiceNote,
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
     * @return InputMediaVoiceNote
     */
    public function getVoiceNote(): InputMediaVoiceNote
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
