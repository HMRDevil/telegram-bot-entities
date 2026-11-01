<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Caption of a rich formatted block.
 *
 * @see https://core.telegram.org/bots/api#richblockcaption
 */
final class RichBlockCaption
{
    /**
     * @param RichText $text Block caption
     * @param RichText|null $credit Optional. Block credit which corresponds to the HTML tag <cite>
    */
    public function __construct
    (
         private RichText $text,
         private ?RichText $credit = null
    ) {}
    
    /**
     * @return RichText
     */
    public function getText(): RichText
    {
        return $this->text;
    }

    /**
     * @return RichText|null
     */
    public function getCredit(): ?RichText
    {
        return $this->credit;
    }
}
