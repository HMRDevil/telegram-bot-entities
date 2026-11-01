<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object describes an update about a user stopping message generation.
 *
 * @see https://core.telegram.org/bots/api#messagegenerationstopped
 */
final class MessageGenerationStopped
{
    /**
     * @param Chat $chat Chat in which the message is generated
     * @param int $draftId Unique identifier of the message draft which was stopped
     * @param int|null $messageThreadId Optional. Unique identifier of the message thread in which the message is generated
    */
    public function __construct
    (
         private Chat $chat,
         private int $draftId,
         private ?int $messageThreadId = null
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
    public function getDraftId(): int
    {
        return $this->draftId;
    }

    /**
     * @return int|null
     */
    public function getMessageThreadId(): ?int
    {
        return $this->messageThreadId;
    }
}
