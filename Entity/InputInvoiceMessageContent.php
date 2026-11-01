<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Represents the content of an invoice message to be sent as the result of an inline query.
 *
 * @see https://core.telegram.org/bots/api#inputinvoicemessagecontent
 */
final class InputInvoiceMessageContent
{
    /**
     * @param string $title Product name, 1-32 characters
     * @param string $description Product description, 1-255 characters
     * @param string $payload Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use it for your internal processes.
     * @param string $currency Three-letter ISO 4217 currency code, see more on currencies. Pass "XTR" for payments in Telegram Stars.
     * @param LabeledPrice[] $prices Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.). Must contain exactly one item for payments in Telegram Stars.
     * @param string|null $providerToken Optional. Payment provider token, obtained via @BotFather. Pass an empty string for payments in Telegram Stars.
     * @param int|null $maxTipAmount Optional. The maximum accepted amount for tips in the smallest units of the currency (integer, not float/double). For example, for a maximum tip of US$ 1.45 pass max_tip_amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0. Not supported for payments in Telegram Stars.
     * @param Integer[]|null $suggestedTipAmounts Optional. A JSON-serialized Array of suggested amounts of tip in the smallest units of the currency (integer, not float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed max_tip_amount.
     * @param string|null $providerData Optional. A JSON-serialized object for data about the invoice, which will be shared with the payment provider. A detailed description of the required fields should be provided by the payment provider.
     * @param string|null $photoUrl Optional. URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service.
     * @param int|null $photoSize Optional. Photo size in bytes
     * @param int|null $photoWidth Optional. Photo width
     * @param int|null $photoHeight Optional. Photo height
     * @param bool|null $needName Optional. Pass True if you require the user's full name to complete the order. Ignored for payments in Telegram Stars.
     * @param bool|null $needPhoneNumber Optional. Pass True if you require the user's phone number to complete the order. Ignored for payments in Telegram Stars.
     * @param bool|null $needEmail Optional. Pass True if you require the user's email address to complete the order. Ignored for payments in Telegram Stars.
     * @param bool|null $needShippingAddress Optional. Pass True if you require the user's shipping address to complete the order. Ignored for payments in Telegram Stars.
     * @param bool|null $sendPhoneNumberToProvider Optional. Pass True if the user's phone number should be sent to the provider. Ignored for payments in Telegram Stars.
     * @param bool|null $sendEmailToProvider Optional. Pass True if the user's email address should be sent to the provider. Ignored for payments in Telegram Stars.
     * @param bool|null $isFlexible Optional. Pass True if the final price depends on the shipping method. Ignored for payments in Telegram Stars.
    */
    public function __construct
    (
         private string $title,
         private string $description,
         private string $payload,
         private string $currency,
         private array $prices,
         private ?string $providerToken = null,
         private ?int $maxTipAmount = null,
         private ?array $suggestedTipAmounts = null,
         private ?string $providerData = null,
         private ?string $photoUrl = null,
         private ?int $photoSize = null,
         private ?int $photoWidth = null,
         private ?int $photoHeight = null,
         private ?bool $needName = null,
         private ?bool $needPhoneNumber = null,
         private ?bool $needEmail = null,
         private ?bool $needShippingAddress = null,
         private ?bool $sendPhoneNumberToProvider = null,
         private ?bool $sendEmailToProvider = null,
         private ?bool $isFlexible = null
    ) {}
    
    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getPayload(): string
    {
        return $this->payload;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @return LabeledPrice[]
     */
    public function getPrices(): array
    {
        return $this->prices;
    }

    /**
     * @return string|null
     */
    public function getProviderToken(): ?string
    {
        return $this->providerToken;
    }

    /**
     * @return int|null
     */
    public function getMaxTipAmount(): ?int
    {
        return $this->maxTipAmount;
    }

    /**
     * @return Integer[]|null
     */
    public function getSuggestedTipAmounts(): ?array
    {
        return $this->suggestedTipAmounts;
    }

    /**
     * @return string|null
     */
    public function getProviderData(): ?string
    {
        return $this->providerData;
    }

    /**
     * @return string|null
     */
    public function getPhotoUrl(): ?string
    {
        return $this->photoUrl;
    }

    /**
     * @return int|null
     */
    public function getPhotoSize(): ?int
    {
        return $this->photoSize;
    }

    /**
     * @return int|null
     */
    public function getPhotoWidth(): ?int
    {
        return $this->photoWidth;
    }

    /**
     * @return int|null
     */
    public function getPhotoHeight(): ?int
    {
        return $this->photoHeight;
    }

    /**
     * @return bool|null
     */
    public function getNeedName(): ?bool
    {
        return $this->needName;
    }

    /**
     * @return bool|null
     */
    public function getNeedPhoneNumber(): ?bool
    {
        return $this->needPhoneNumber;
    }

    /**
     * @return bool|null
     */
    public function getNeedEmail(): ?bool
    {
        return $this->needEmail;
    }

    /**
     * @return bool|null
     */
    public function getNeedShippingAddress(): ?bool
    {
        return $this->needShippingAddress;
    }

    /**
     * @return bool|null
     */
    public function getSendPhoneNumberToProvider(): ?bool
    {
        return $this->sendPhoneNumberToProvider;
    }

    /**
     * @return bool|null
     */
    public function getSendEmailToProvider(): ?bool
    {
        return $this->sendEmailToProvider;
    }

    /**
     * @return bool|null
     */
    public function getIsFlexible(): ?bool
    {
        return $this->isFlexible;
    }
}
