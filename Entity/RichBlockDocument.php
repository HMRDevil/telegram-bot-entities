<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A block with a general file, corresponding to the custom HTML tag <tg-document>.
 *
 * @see https://core.telegram.org/bots/api#richblockdocument
 */
final class RichBlockDocument
{
    /**
     * @param string $type Type of the block, always "document"
     * @param Document $document The document
     * @param RichBlockCaption|null $caption Optional. Caption of the block
    */
    public function __construct
    (
         private string $type,
         private Document $document,
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
     * @return Document
     */
    public function getDocument(): Document
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
