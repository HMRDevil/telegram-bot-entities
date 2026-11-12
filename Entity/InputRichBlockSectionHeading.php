<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A section heading, corresponding to the HTML tags <h1>, <h2>, <h3>, <h4>, <h5>, or <h6>.
 *
 * @see https://core.telegram.org/bots/api#inputrichblocksectionheading
 */
final class InputRichBlockSectionHeading
{
    /**
     * @var string $type Type of the block, always “heading”
     */
    private string $type = 'heading';

    /**
     * @param RichText $text Text of the block
     * @param int $size Relative size of the text font; 1-6, 1 is the largest, 6 is the smallest
    */
    public function __construct
    (
         private RichText $text,
         private int $size
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
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }
}
