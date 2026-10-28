<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes the options used for link preview generation.
 *
 * @see https://core.telegram.org/bots/api#linkpreviewoptions
 */
final class LinkPreviewOptions
{
    /**
     * @param bool|null $isDisabled Optional. True, if the link preview is disabled
     * @param string|null $url Optional. URL to use for the link preview. If empty, then the first URL found in the message text will be used.
     * @param bool|null $preferSmallMedia Optional. True, if the media in the link preview is supposed to be shrunk; ignored if the URL isn't explicitly specified or media size change isn't supported for the preview
     * @param bool|null $preferLargeMedia Optional. True, if the media in the link preview is supposed to be enlarged; ignored if the URL isn't explicitly specified or media size change isn't supported for the preview
     * @param bool|null $showAboveText Optional. True, if the link preview must be shown above the message text; otherwise, the link preview will be shown below the message text
    */
    public function __construct
    (
         private ?bool $isDisabled = null,
         private ?string $url = null,
         private ?bool $preferSmallMedia = null,
         private ?bool $preferLargeMedia = null,
         private ?bool $showAboveText = null
    ) {}
    
    /**
     * @return bool|null
     */
    public function getIsDisabled(): ?bool
    {
        return $this->isDisabled;
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @return bool|null
     */
    public function getPreferSmallMedia(): ?bool
    {
        return $this->preferSmallMedia;
    }

    /**
     * @return bool|null
     */
    public function getPreferLargeMedia(): ?bool
    {
        return $this->preferLargeMedia;
    }

    /**
     * @return bool|null
     */
    public function getShowAboveText(): ?bool
    {
        return $this->showAboveText;
    }
}
