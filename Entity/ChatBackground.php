<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents a chat background.
 *
 * @see https://core.telegram.org/bots/api#chatbackground
 */
final class ChatBackground
{
    /**
     * @param BackgroundType $type Type of the background
    */
    public function __construct
    (
         private BackgroundType $type
    ) {}
    
    /**
     * @return BackgroundType
     */
    public function getType(): BackgroundType
    {
        return $this->type;
    }
}
