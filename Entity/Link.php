<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Represents an HTTP link.
 *
 * @see https://core.telegram.org/bots/api#link
 */
final class Link
{
    /**
     * @param string $url URL of the link
    */
    public function __construct
    (
         private string $url
    ) {}
    
    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
}
