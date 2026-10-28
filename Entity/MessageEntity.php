<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents one special entity in a text message. For example, hashtags, usernames, URLs, etc.
 *
 * @see https://core.telegram.org/bots/api#messageentity
 */
final class MessageEntity
{
    /**
     * @param string $type Type of the entity. Currently, can be "mention" (@username), "hashtag" (#hashtag or #hashtag@chatusername), "cashtag" ($USD or $USD@chatusername), "bot_command" (/start@jobs_bot), "url" (https://telegram.org), "email" (do-not-reply@telegram.org), "phone_number" (+1-212-555-0123), "bold" (bold text), "italic" (italic text), "underline" (underlined text), "strikethrough" (strikethrough text), "spoiler" (spoiler message), "blockquote" (block quotation), "expandable_blockquote" (collapsed-by-default block quotation), "code" (monowidth string), "pre" (monowidth block), "text_link" (for clickable text URLs), "text_mention" (for users without usernames), "custom_emoji" (for inline custom emoji stickers), or "date_time" (for formatted date and time).
     * @param int $offset Offset in UTF-16 code units to the start of the entity
     * @param int $length Length of the entity in UTF-16 code units
     * @param string|null $url Optional. For "text_link" only, URL that will be opened after user taps on the text
     * @param User|null $user Optional. For "text_mention" only, the mentioned user
     * @param string|null $language Optional. For "pre" only, the programming language of the entity text
     * @param string|null $customEmojiId Optional. For "custom_emoji" only, unique identifier of the custom emoji. Use getCustomEmojiStickers to get full information about the sticker.
     * @param int|null $unixTime Optional. For "date_time" only, the Unix time associated with the entity
     * @param string|null $dateTimeFormat Optional. For "date_time" only, the string that defines the formatting of the date and time. See date-time entity formatting for more details.
    */
    public function __construct
    (
         private string $type,
         private int $offset,
         private int $length,
         private ?string $url = null,
         private ?User $user = null,
         private ?string $language = null,
         private ?string $customEmojiId = null,
         private ?int $unixTime = null,
         private ?string $dateTimeFormat = null
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @return User|null
     */
    public function getUser(): ?User
    {
        return $this->user;
    }

    /**
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * @return string|null
     */
    public function getCustomEmojiId(): ?string
    {
        return $this->customEmojiId;
    }

    /**
     * @return int|null
     */
    public function getUnixTime(): ?int
    {
        return $this->unixTime;
    }

    /**
     * @return string|null
     */
    public function getDateTimeFormat(): ?string
    {
        return $this->dateTimeFormat;
    }
}
