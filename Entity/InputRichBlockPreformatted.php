<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A preformatted text block, corresponding to the nested HTML tags <pre> and <code>.
 *
 * @see https://core.telegram.org/bots/api#inputrichblockpreformatted
 */
final class InputRichBlockPreformatted
{
    /**
     * @param string $type Type of the block, always "pre"
     * @param RichText $text Text of the block
     * @param string|null $language Optional. The programming language of the text
    */
    public function __construct
    (
         private string $type,
         private RichText $text,
         private ?string $language = null
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return RichText
     */
    public function getText(): RichText
    {
        return $this->text;
    }

    /**
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }
}
