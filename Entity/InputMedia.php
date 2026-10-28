<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents the content of a media message to be sent. It should be one of
 * - InputMediaAnimation
 * - InputMediaAudio
 * - InputMediaDocument
 * - InputMediaLivePhoto
 * - InputMediaPhoto
 * - InputMediaVideo
 * 
 * @see https://core.telegram.org/bots/api#inputmedia
 */
interface InputMedia {}
