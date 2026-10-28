<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a Web App.
 *
 * @see https://core.telegram.org/bots/api#webappinfo
 */
final class WebAppInfo
{
    /**
     * @param string $url An HTTPS URL of a Web App to be opened with additional data as specified in Initializing Web Apps
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
