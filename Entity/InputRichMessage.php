<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a rich message to be sent. Exactly one of the fields html, markdown, or blocks must be used.
 *
 * @see https://core.telegram.org/bots/api#inputrichmessage
 */
final class InputRichMessage
{
    /**
     * @param InputRichBlock[]|null $blocks Optional. Content of the rich message to send described as a list of blocks
     * @param string|null $html Optional. Content of the rich message to send described using HTML formatting. See rich message formatting options for more details. Use media field to specify the media used in the message.
     * @param string|null $markdown Optional. Content of the rich message to send described using Markdown formatting. See rich message formatting options for more details. Use media field to specify the media used in the message.
     * @param InputRichMessageMedia[]|null $media Optional. List of media that are specified in the markdown or html fields using tg://photo?id=, tg://video?id=, and tg://audio?id= links
     * @param bool|null $isRtl Optional. Pass True if the rich message must be shown right-to-left
     * @param bool|null $skipEntityDetection Optional. Pass True to skip automatic detection of entities (e.g., URLs, email addresses, username mentions, hashtags, cashtags, bot commands, or phone numbers) in the text
    */
    public function __construct
    (
         private ?array $blocks = null,
         private ?string $html = null,
         private ?string $markdown = null,
         private ?array $media = null,
         private ?bool $isRtl = null,
         private ?bool $skipEntityDetection = null
    ) {}
    
    /**
     * @return InputRichBlock[]|null
     */
    public function getBlocks(): ?array
    {
        return $this->blocks;
    }

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
     * @return InputRichMessageMedia[]|null
     */
    public function getMedia(): ?array
    {
        return $this->media;
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
