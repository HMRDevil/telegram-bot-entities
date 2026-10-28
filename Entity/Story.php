<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents a story.
 *
 * @see https://core.telegram.org/bots/api#story
 */
final class Story
{
    /**
     * @param Chat $chat Chat that posted the story
     * @param int $id Unique identifier for the story in the chat
    */
    public function __construct
    (
         private Chat $chat,
         private int $id
    ) {}
    
    /**
     * @return Chat
     */
    public function getChat(): Chat
    {
        return $this->chat;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
}
