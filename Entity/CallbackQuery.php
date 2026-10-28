<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents an incoming callback query from a callback button in an inline keyboard. If the button that originated the query was attached to a message sent by the bot, the field message will be present. If the button was attached to a message sent via the bot (in inline mode), the field inline_message_id will be present. Exactly one of the fields data or game_short_name will be present.
 *
 * @see https://core.telegram.org/bots/api#callbackquery
 */
final class CallbackQuery
{
    /**
     * @param string $id Unique identifier for this query
     * @param User $from Sender
     * @param string $chatInstance Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent. Useful for high scores in games.
     * @param MaybeInaccessibleMessage|null $message Optional. Message sent by the bot with the callback button that originated the query
     * @param string|null $inlineMessageId Optional. Identifier of the message sent via the bot in inline mode, that originated the query
     * @param string|null $data Optional. Data associated with the callback button. Be aware that the message originated the query can contain no callback buttons with this data.
     * @param string|null $gameShortName Optional. Short name of a Game to be returned, serves as the unique identifier for the game
    */
    public function __construct
    (
         private string $id,
         private User $from,
         private string $chatInstance,
         private ?MaybeInaccessibleMessage $message = null,
         private ?string $inlineMessageId = null,
         private ?string $data = null,
         private ?string $gameShortName = null
    ) {}
    
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return User
     */
    public function getFrom(): User
    {
        return $this->from;
    }

    /**
     * @return string
     */
    public function getChatInstance(): string
    {
        return $this->chatInstance;
    }

    /**
     * @return MaybeInaccessibleMessage|null
     */
    public function getMessage(): ?MaybeInaccessibleMessage
    {
        return $this->message;
    }

    /**
     * @return string|null
     */
    public function getInlineMessageId(): ?string
    {
        return $this->inlineMessageId;
    }

    /**
     * @return string|null
     */
    public function getData(): ?string
    {
        return $this->data;
    }

    /**
     * @return string|null
     */
    public function getGameShortName(): ?string
    {
        return $this->gameShortName;
    }
}
