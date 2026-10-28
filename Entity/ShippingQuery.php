<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object contains information about an incoming shipping query.
 *
 * @see https://core.telegram.org/bots/api#shippingquery
 */
final class ShippingQuery
{
    /**
     * @param string $id Unique query identifier
     * @param User $from User who sent the query
     * @param string $invoicePayload Bot-specified invoice payload
     * @param ShippingAddress $shippingAddress User specified shipping address
    */
    public function __construct
    (
         private string $id,
         private User $from,
         private string $invoicePayload,
         private ShippingAddress $shippingAddress
    ) {}
    
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return User
     */
    public function getFrom(): User
    {
        return $this->from;
    }

    /**
     * @return string
     */
    public function getInvoicePayload(): string
    {
        return $this->invoicePayload;
    }

    /**
     * @return ShippingAddress
     */
    public function getShippingAddress(): ShippingAddress
    {
        return $this->shippingAddress;
    }
}
