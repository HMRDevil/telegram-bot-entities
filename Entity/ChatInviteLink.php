<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Represents an invite link for a chat.
 *
 * @see https://core.telegram.org/bots/api#chatinvitelink
 */
final class ChatInviteLink
{
    /**
     * @param string $inviteLink The invite link. If the link was created by another chat administrator, then the second part of the link will be replaced with "...".
     * @param User $creator Creator of the link
     * @param bool $createsJoinRequest True, if users joining the chat via the link need to be approved by chat administrators
     * @param bool $isPrimary True, if the link is primary
     * @param bool $isRevoked True, if the link is revoked
     * @param string|null $name Optional. Invite link name
     * @param int|null $expireDate Optional. Point in time (Unix timestamp) when the link will expire or has been expired
     * @param int|null $memberLimit Optional. The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
     * @param int|null $pendingJoinRequestCount Optional. Number of pending join requests created using this link
     * @param int|null $subscriptionPeriod Optional. The number of seconds the subscription will be active for before the next payment
     * @param int|null $subscriptionPrice Optional. The amount of Telegram Stars a user must pay initially and after each subsequent subscription period to be a member of the chat using the link
    */
    public function __construct
    (
         private string $inviteLink,
         private User $creator,
         private bool $createsJoinRequest,
         private bool $isPrimary,
         private bool $isRevoked,
         private ?string $name = null,
         private ?int $expireDate = null,
         private ?int $memberLimit = null,
         private ?int $pendingJoinRequestCount = null,
         private ?int $subscriptionPeriod = null,
         private ?int $subscriptionPrice = null
    ) {}
    
    /**
     * @return string
     */
    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    /**
     * @return User
     */
    public function getCreator(): User
    {
        return $this->creator;
    }

    /**
     * @return bool
     */
    public function getCreatesJoinRequest(): bool
    {
        return $this->createsJoinRequest;
    }

    /**
     * @return bool
     */
    public function getIsPrimary(): bool
    {
        return $this->isPrimary;
    }

    /**
     * @return bool
     */
    public function getIsRevoked(): bool
    {
        return $this->isRevoked;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return int|null
     */
    public function getExpireDate(): ?int
    {
        return $this->expireDate;
    }

    /**
     * @return int|null
     */
    public function getMemberLimit(): ?int
    {
        return $this->memberLimit;
    }

    /**
     * @return int|null
     */
    public function getPendingJoinRequestCount(): ?int
    {
        return $this->pendingJoinRequestCount;
    }

    /**
     * @return int|null
     */
    public function getSubscriptionPeriod(): ?int
    {
        return $this->subscriptionPeriod;
    }

    /**
     * @return int|null
     */
    public function getSubscriptionPrice(): ?int
    {
        return $this->subscriptionPrice;
    }
}
