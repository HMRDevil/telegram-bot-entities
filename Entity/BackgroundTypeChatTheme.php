<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * The background is taken directly from a built-in chat theme.
 *
 * @see https://core.telegram.org/bots/api#backgroundtypechattheme
 */
final class BackgroundTypeChatTheme
{
    /**
     * @param string $type Type of the background, always "chat_theme"
     * @param string $themeName Name of the chat theme, which is usually an emoji
    */
    public function __construct
    (
         private string $type,
         private string $themeName
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
    public function getThemeName(): string
    {
        return $this->themeName;
    }
}
