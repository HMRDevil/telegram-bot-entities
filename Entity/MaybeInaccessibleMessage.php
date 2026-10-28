<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object describes a message that can be inaccessible to the bot. It can be one of
 * - Message
 * - InaccessibleMessage
 * 
 * @see https://core.telegram.org/bots/api#maybeinaccessiblemessage
 */
interface MaybeInaccessibleMessage {}
