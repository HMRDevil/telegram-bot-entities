<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Represents an HTTP link to be sent.
 *
 * @see https://core.telegram.org/bots/api#inputmedialink
 */
final class InputMediaLink
{
    /**
     * @param string $type Type of the media, must be link
     * @param string $url HTTP URL of the link
    */
    public function __construct
    (
         private string $type,
         private string $url
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
}
