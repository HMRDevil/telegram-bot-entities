<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Contains information about the start page settings of a Telegram Business account.
 *
 * @see https://core.telegram.org/bots/api#businessintro
 */
final class BusinessIntro
{
    /**
     * @param string|null $title Optional. Title text of the business intro
     * @param string|null $message Optional. Message text of the business intro
     * @param Sticker|null $sticker Optional. Sticker of the business intro
    */
    public function __construct
    (
         private ?string $title = null,
         private ?string $message = null,
         private ?Sticker $sticker = null
    ) {}
    
    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @return Sticker|null
     */
    public function getSticker(): ?Sticker
    {
        return $this->sticker;
    }
}
