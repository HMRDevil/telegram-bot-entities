<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes the current status of a webhook.
 *
 * @see https://core.telegram.org/bots/api#webhookinfo
 */
final class WebhookInfo
{
    /**
     * @param string $url Webhook URL, may be empty if webhook is not set up
     * @param bool $hasCustomCertificate True, if a custom certificate was provided for webhook certificate checks
     * @param int $pendingUpdateCount Number of updates awaiting delivery
     * @param string|null $ipAddress Optional. Currently used webhook IP address
     * @param int|null $lastErrorDate Optional. Unix time for the most recent error that happened when trying to deliver an update via webhook
     * @param string|null $lastErrorMessage Optional. Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook
     * @param int|null $lastSynchronizationErrorDate Optional. Unix time of the most recent error that happened when trying to synchronize available updates with Telegram datacenters
     * @param int|null $maxConnections Optional. The maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery
     * @param String[]|null $allowedUpdates Optional. A list of update types the bot is subscribed to. Defaults to all update types except chat_member, message_reaction, and message_reaction_count.
    */
    public function __construct
    (
         private string $url,
         private bool $hasCustomCertificate,
         private int $pendingUpdateCount,
         private ?string $ipAddress = null,
         private ?int $lastErrorDate = null,
         private ?string $lastErrorMessage = null,
         private ?int $lastSynchronizationErrorDate = null,
         private ?int $maxConnections = null,
         private ?array $allowedUpdates = null
    ) {}
    
    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return bool
     */
    public function getHasCustomCertificate(): bool
    {
        return $this->hasCustomCertificate;
    }

    /**
     * @return int
     */
    public function getPendingUpdateCount(): int
    {
        return $this->pendingUpdateCount;
    }

    /**
     * @return string|null
     */
    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    /**
     * @return int|null
     */
    public function getLastErrorDate(): ?int
    {
        return $this->lastErrorDate;
    }

    /**
     * @return string|null
     */
    public function getLastErrorMessage(): ?string
    {
        return $this->lastErrorMessage;
    }

    /**
     * @return int|null
     */
    public function getLastSynchronizationErrorDate(): ?int
    {
        return $this->lastSynchronizationErrorDate;
    }

    /**
     * @return int|null
     */
    public function getMaxConnections(): ?int
    {
        return $this->maxConnections;
    }

    /**
     * @return String[]|null
     */
    public function getAllowedUpdates(): ?array
    {
        return $this->allowedUpdates;
    }
}
