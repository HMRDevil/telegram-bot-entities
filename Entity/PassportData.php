<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes Telegram Passport data shared with the bot by the user.
 *
 * @see https://core.telegram.org/bots/api#passportdata
 */
final class PassportData
{
    /**
     * @param EncryptedPassportElement[] $data Array with information about documents and other Telegram Passport elements that was shared with the bot
     * @param EncryptedCredentials $credentials Encrypted credentials required to decrypt the data
    */
    public function __construct
    (
         private array $data,
         private EncryptedCredentials $credentials
    ) {}
    
    /**
     * @return EncryptedPassportElement[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @return EncryptedCredentials
     */
    public function getCredentials(): EncryptedCredentials
    {
        return $this->credentials;
    }
}
