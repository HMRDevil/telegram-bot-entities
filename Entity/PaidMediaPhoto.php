<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * The paid media is a photo.
 *
 * @see https://core.telegram.org/bots/api#paidmediaphoto
 */
final class PaidMediaPhoto
{
    /**
     * @var string $type Type of the paid media, always “photo”
     */
    private string $type = 'photo';

    /**
     * @param PhotoSize[] $photo The photo
    */
    public function __construct
    (
         private array $photo
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return PhotoSize[]
     */
    public function getPhoto(): array
    {
        return $this->photo;
    }
}
