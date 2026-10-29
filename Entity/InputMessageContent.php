<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents the content of a message to be sent as a result of an inline query. Telegram clients currently support the following types:
 * - InputTextMessageContent
 * - InputRichMessageContent
 * - InputLocationMessageContent
 * - InputVenueMessageContent
 * - InputContactMessageContent
 * - InputInvoiceMessageContent
 * 
 * @see https://core.telegram.org/bots/api#inputmessagecontent
 */
interface InputMessageContent {}
