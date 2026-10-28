<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents the content of a poll description or a quiz explanation to be sent. It should be one of
 * - InputMediaAnimation
 * - InputMediaAudio
 * - InputMediaDocument
 * - InputMediaLivePhoto
 * - InputMediaLocation
 * - InputMediaPhoto
 * - InputMediaVenue
 * - InputMediaVideo
 * 
 * @see https://core.telegram.org/bots/api#inputpollmedia
 */
interface InputPollMedia {}
