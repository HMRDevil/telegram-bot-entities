<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents a rich formatted text. Currently, it can be either a String for plain text, an Array of RichText, or any of the following types:
 * - RichTextBold
 * - RichTextItalic
 * - RichTextUnderline
 * - RichTextStrikethrough
 * - RichTextSpoiler
 * - RichTextDateTime
 * - RichTextTextMention
 * - RichTextSubscript
 * - RichTextSuperscript
 * - RichTextMarked
 * - RichTextCode
 * - RichTextCustomEmoji
 * - RichTextMathematicalExpression
 * - RichTextUrl
 * - RichTextEmailAddress
 * - RichTextPhoneNumber
 * - RichTextBankCardNumber
 * - RichTextMention
 * - RichTextHashtag
 * - RichTextCashtag
 * - RichTextBotCommand
 * - RichTextButton
 * - RichTextAnchor
 * - RichTextAnchorLink
 * - RichTextReference
 * - RichTextReferenceLink
 * 
 * @see https://core.telegram.org/bots/api#richtext
 */
interface RichText {}
