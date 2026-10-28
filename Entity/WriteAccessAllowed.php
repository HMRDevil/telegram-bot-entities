<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents a service message about a user allowing a bot to write messages after adding it to the attachment menu, launching a Web App from a link, or accepting an explicit request from a Web App sent by the method requestWriteAccess.
 *
 * @see https://core.telegram.org/bots/api#writeaccessallowed
 */
final class WriteAccessAllowed
{
    /**
     * @param bool|null $fromRequest Optional. True, if the access was granted after the user accepted an explicit request from a Web App sent by the method requestWriteAccess
     * @param string|null $webAppName Optional. Name of the Web App, if the access was granted when the Web App was launched from a link
     * @param bool|null $fromAttachmentMenu Optional. True, if the access was granted when the bot was added to the attachment or side menu
    */
    public function __construct
    (
         private ?bool $fromRequest = null,
         private ?string $webAppName = null,
         private ?bool $fromAttachmentMenu = null
    ) {}
    
    /**
     * @return bool|null
     */
    public function getFromRequest(): ?bool
    {
        return $this->fromRequest;
    }

    /**
     * @return string|null
     */
    public function getWebAppName(): ?string
    {
        return $this->webAppName;
    }

    /**
     * @return bool|null
     */
    public function getFromAttachmentMenu(): ?bool
    {
        return $this->fromAttachmentMenu;
    }
}
