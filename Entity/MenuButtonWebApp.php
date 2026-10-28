<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Represents a menu button, which launches a Web App.
 *
 * @see https://core.telegram.org/bots/api#menubuttonwebapp
 */
final class MenuButtonWebApp
{
    /**
     * @param string $type Type of the button, must be web_app
     * @param string $text Text on the button
     * @param WebAppInfo $webApp Description of the Web App that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method answerWebAppQuery. Alternatively, a t.me link to a Web App of the bot can be specified in the object instead of the Web App's URL, in which case the Web App will be opened as if the user pressed the link.
    */
    public function __construct
    (
         private string $type,
         private string $text,
         private WebAppInfo $webApp
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
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return WebAppInfo
     */
    public function getWebApp(): WebAppInfo
    {
        return $this->webApp;
    }
}
