<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Rich formatted message.
 *
 * @see https://core.telegram.org/bots/api#richmessage
 */
final class RichMessage
{
    /**
     * @param RichBlock[] $blocks Content of the message
     * @param bool|null $isRtl Optional. True, if the rich message must be shown right-to-left
    */
    public function __construct
    (
         private array $blocks,
         private ?bool $isRtl = null
    ) {}
    
    /**
     * @return RichBlock[]
     */
    public function getBlocks(): array
    {
        return $this->blocks;
    }

    /**
     * @return bool|null
     */
    public function getIsRtl(): ?bool
    {
        return $this->isRtl;
    }
}
