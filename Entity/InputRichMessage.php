<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a rich message to be sent. Exactly one of the fields html or markdown must be used.
 *
 * @see https://core.telegram.org/bots/api#inputrichmessage
 */
final class InputRichMessage
{
    /**
     * @param string|null $html Optional. Content of the rich message to send described using HTML formatting. See rich message formatting options for more details.
     * @param string|null $markdown Optional. Content of the rich message to send described using Markdown formatting. See rich message formatting options for more details.
     * @param bool|null $isRtl Optional. Pass True if the rich message must be shown right-to-left
     * @param bool|null $skipEntityDetection Optional. Pass True to skip automatic detection of entities (e.g., URLs, email addresses, username mentions, hashtags, cashtags, bot commands, or phone numbers) in the text
    */
    public function __construct
    (
         private ?string $html = null,
         private ?string $markdown = null,
         private ?bool $isRtl = null,
         private ?bool $skipEntityDetection = null
    ) {}
    
    /**
     * @return string|null
     */
    public function getHtml(): ?string
    {
        return $this->html;
    }

    /**
     * @return string|null
     */
    public function getMarkdown(): ?string
    {
        return $this->markdown;
    }

    /**
     * @return bool|null
     */
    public function getIsRtl(): ?bool
    {
        return $this->isRtl;
    }

    /**
     * @return bool|null
     */
    public function getSkipEntityDetection(): ?bool
    {
        return $this->skipEntityDetection;
    }
}
