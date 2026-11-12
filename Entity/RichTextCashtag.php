<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A cashtag.
 *
 * @see https://core.telegram.org/bots/api#richtextcashtag
 */
final class RichTextCashtag
{
    /**
     * @var string $type Type of the rich text, always “cashtag”
     */
    private string $type = 'cashtag';

    /**
     * @param RichText $text The text
     * @param string $cashtag The cashtag
    */
    public function __construct
    (
         private RichText $text,
         private string $cashtag
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
     * @return string
     */
    public function getCashtag(): string
    {
        return $this->cashtag;
    }
}
