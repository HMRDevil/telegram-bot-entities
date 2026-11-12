<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Represents a Game.
 *
 * @see https://core.telegram.org/bots/api#inlinequeryresultgame
 */
final class InlineQueryResultGame
{
    /**
     * @var string $type Type of the result, must be game
     */
    private string $type = 'game';

    /**
     * @param string $id Unique identifier for this result, 1-64 bytes
     * @param string $gameShortName Short name of the game
     * @param InlineKeyboardMarkup|null $replyMarkup Optional. Inline keyboard attached to the message
    */
    public function __construct
    (
         private string $id,
         private string $gameShortName,
         private ?InlineKeyboardMarkup $replyMarkup = null
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
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getGameShortName(): string
    {
        return $this->gameShortName;
    }

    /**
     * @return InlineKeyboardMarkup|null
     */
    public function getReplyMarkup(): ?InlineKeyboardMarkup
    {
        return $this->replyMarkup;
    }
}
