<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents information about an order.
 *
 * @see https://core.telegram.org/bots/api#orderinfo
 */
final class OrderInfo
{
    /**
     * @param string|null $name Optional. User name
     * @param string|null $phoneNumber Optional. User's phone number
     * @param string|null $email Optional. User email
     * @param ShippingAddress|null $shippingAddress Optional. User shipping address
    */
    public function __construct
    (
         private ?string $name = null,
         private ?string $phoneNumber = null,
         private ?string $email = null,
         private ?ShippingAddress $shippingAddress = null
    ) {}
    
    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @return ShippingAddress|null
     */
    public function getShippingAddress(): ?ShippingAddress
    {
        return $this->shippingAddress;
    }
}
