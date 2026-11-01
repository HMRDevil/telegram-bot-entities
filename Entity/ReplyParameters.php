<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes reply parameters for the message that is being sent.
 *
 * @see https://core.telegram.org/bots/api#replyparameters
 */
final class ReplyParameters
{
    /**
     * @param int|null $messageId Optional. Identifier of the message that will be replied to in the current chat, or in the chat chat_id if it is specified. Required if ephemeral_message_id isn't specified.
     * @param int|string|null $chatId Optional. If the message to be replied to is from a different chat, unique identifier for the chat or username of the bot, supergroup or channel in the format @username. Not supported for messages sent on behalf of a business account, messages from channel direct messages chats and ephemeral messages.
     * @param int|null $ephemeralMessageId Optional. Identifier of the incoming ephemeral message that will be replied to in the current chat. A reply to an ephemeral message must itself be an ephemeral message. An ephemeral message may only be replied to within 15 seconds of being sent. Required if message_id isn't specified.
     * @param bool|null $allowSendingWithoutReply Optional. Pass True if the message should be sent even if the specified message to be replied to is not found. Always False for replies in another chat or forum topic, and sent ephemeral messages. Always True for messages sent on behalf of a business account.
     * @param string|null $quote Optional. Quoted part of the message to be replied to; 0-1024 characters after entities parsing. The quote must be an exact substring of the message to be replied to, including bold, italic, underline, strikethrough, spoiler, custom_emoji, and date_time entities. The message will fail to send if the quote isn't found in the original message. Ignored for ephemeral messages.
     * @param string|null $quoteParseMode Optional. Mode for parsing entities in the quote. See formatting options for more details.
     * @param MessageEntity[]|null $quoteEntities Optional. A JSON-serialized list of special entities that appear in the quote. It can be specified instead of quote_parse_mode.
     * @param int|null $quotePosition Optional. Position of the quote in the original message in UTF-16 code units
     * @param int|null $checklistTaskId Optional. Identifier of the specific checklist task to be replied to
     * @param string|null $pollOptionId Optional. Persistent identifier of the specific poll option to be replied to
    */
    public function __construct
    (
         private ?int $messageId = null,
         private int|string|null $chatId = null,
         private ?int $ephemeralMessageId = null,
         private ?bool $allowSendingWithoutReply = null,
         private ?string $quote = null,
         private ?string $quoteParseMode = null,
         private ?array $quoteEntities = null,
         private ?int $quotePosition = null,
         private ?int $checklistTaskId = null,
         private ?string $pollOptionId = null
    ) {}
    
    /**
     * @return int|null
     */
    public function getMessageId(): ?int
    {
        return $this->messageId;
    }

    /**
     * @return int|string|null
     */
    public function getChatId(): int|string|null
    {
        return $this->chatId;
    }

    /**
     * @return int|null
     */
    public function getEphemeralMessageId(): ?int
    {
        return $this->ephemeralMessageId;
    }

    /**
     * @return bool|null
     */
    public function getAllowSendingWithoutReply(): ?bool
    {
        return $this->allowSendingWithoutReply;
    }

    /**
     * @return string|null
     */
    public function getQuote(): ?string
    {
        return $this->quote;
    }

    /**
     * @return string|null
     */
    public function getQuoteParseMode(): ?string
    {
        return $this->quoteParseMode;
    }

    /**
     * @return MessageEntity[]|null
     */
    public function getQuoteEntities(): ?array
    {
        return $this->quoteEntities;
    }

    /**
     * @return int|null
     */
    public function getQuotePosition(): ?int
    {
        return $this->quotePosition;
    }

    /**
     * @return int|null
     */
    public function getChecklistTaskId(): ?int
    {
        return $this->checklistTaskId;
    }

    /**
     * @return string|null
     */
    public function getPollOptionId(): ?string
    {
        return $this->pollOptionId;
    }
}
