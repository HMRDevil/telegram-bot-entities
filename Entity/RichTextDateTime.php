<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Formatted date and time.
 *
 * @see https://core.telegram.org/bots/api#richtextdatetime
 */
final class RichTextDateTime
{
    /**
     * @param string $type Type of the rich text, always "date_time"
     * @param RichText $text The text
     * @param int $unixTime The Unix time associated with the entity
     * @param string $dateTimeFormat The string that defines the formatting of the date and time. See date-time entity formatting for more details.
    */
    public function __construct
    (
         private string $type,
         private RichText $text,
         private int $unixTime,
         private string $dateTimeFormat
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return RichText
     */
    public function getText(): RichText
    {
        return $this->text;
    }

    /**
     * @return int
     */
    public function getUnixTime(): int
    {
        return $this->unixTime;
    }

    /**
     * @return string
     */
    public function getDateTimeFormat(): string
    {
        return $this->dateTimeFormat;
    }
}
