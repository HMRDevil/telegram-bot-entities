<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object contains information about the users whose identifiers were shared with the bot using a KeyboardButtonRequestUsers button.
 *
 * @see https://core.telegram.org/bots/api#usersshared
 */
final class UsersShared
{
    /**
     * @param int $requestId Identifier of the request
     * @param SharedUser[] $users Information about users shared with the bot
    */
    public function __construct
    (
         private int $requestId,
         private array $users
    ) {}
    
    /**
     * @return int
     */
    public function getRequestId(): int
    {
        return $this->requestId;
    }

    /**
     * @return SharedUser[]
     */
    public function getUsers(): array
    {
        return $this->users;
    }
}
