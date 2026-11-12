<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Represents the scope of bot commands, covering all group and supergroup chats.
 *
 * @see https://core.telegram.org/bots/api#botcommandscopeallgroupchats
 */
final class BotCommandScopeAllGroupChats
{
    /**
     * @var string $type Scope type, must be all_group_chats
     */
    private string $type = 'all_group_chats';

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}
