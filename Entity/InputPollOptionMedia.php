<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents the content of a poll option to be sent. It should be one of
 * - InputMediaAnimation
 * - InputMediaLink
 * - InputMediaLivePhoto
 * - InputMediaLocation
 * - InputMediaPhoto
 * - InputMediaSticker
 * - InputMediaVenue
 * - InputMediaVideo
 * 
 * @see https://core.telegram.org/bots/api#inputpolloptionmedia
 */
interface InputPollOptionMedia {}
