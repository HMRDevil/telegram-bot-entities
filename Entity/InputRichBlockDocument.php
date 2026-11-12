<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A block with a general file, corresponding to the custom HTML tag <tg-document>.
 *
 * @see https://core.telegram.org/bots/api#inputrichblockdocument
 */
final class InputRichBlockDocument
{
    /**
     * @var string $type Type of the block, always “document”
     */
    private string $type = 'document';

    /**
     * @param InputMediaDocument $document The document. Caption is ignored.
     * @param RichBlockCaption|null $caption Optional. Caption of the block
    */
    public function __construct
    (
         private InputMediaDocument $document,
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
     * @return InputMediaDocument
     */
    public function getDocument(): InputMediaDocument
    {
        return $this->document;
    }

    /**
     * @return RichBlockCaption|null
     */
    public function getCaption(): ?RichBlockCaption
    {
        return $this->caption;
    }
}
