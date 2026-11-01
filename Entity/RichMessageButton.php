<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents a button in a RichMessage. Exactly one of the fields other than text and style must be used to specify the type of the button.
 *
 * @see https://core.telegram.org/bots/api#richmessagebutton
 */
final class RichMessageButton
{
    /**
     * @param RichText $text Text of the button. May contain only plain text, RichTextCustomEmoji and RichTextDateTime entities.
     * @param string|null $style Optional. Style of the button. Must be one of "danger", "success", "primary", or "link" (the button is shown as a regular link without borders). Apps may use theme-specific colors for the button background and text based on the style. The style "link" is allowed only for callback buttons.
     * @param string|null $url Optional. HTTP or tg:// URL to be opened when the button is pressed. Links tg://user?id=<user_id> can be used to mention a user by their identifier without using a username, if this is allowed by their privacy settings.
     * @param string|null $callbackData Optional. Data to be sent in a callback query to the bot when the button is pressed, 1-64 bytes
     * @param WebAppInfo|null $webApp Optional. Description of the Web App that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method answerWebAppQuery. Available only in private chats between a user and the bot. Not supported for messages sent on behalf of a business account.
     * @param LoginUrl|null $loginUrl Optional. An HTTPS URL used to automatically authorize the user. Can be used as a replacement for the Telegram Login Widget. Not supported for ephemeral messages.
     * @param string|null $switchInlineQuery Optional. If set, pressing the button will prompt the user to select one of their chats, open that chat and insert the bot's username and the specified inline query in the input field. May be empty, in which case just the bot's username will be inserted. Not supported for messages sent in channel direct messages chats and on behalf of a business account.
     * @param string|null $switchInlineQueryCurrentChat Optional. If set, pressing the button will insert the bot's username and the specified inline query in the current chat's input field. May be empty, in which case only the bot's username will be inserted. Not supported in channels and for messages sent in channel direct messages chats and on behalf of a business account.
     * @param SwitchInlineQueryChosenChat|null $switchInlineQueryChosenChat Optional. If set, pressing the button will prompt the user to select one of their chats of the specified type, open that chat and insert the bot's username and the specified inline query in the input field. Not supported for messages sent in channel direct messages chats and on behalf of a business account.
     * @param CopyTextButton|null $copyText Optional. A button that copies the specified text to the clipboard
     * @param DisabledButton|null $disabled Optional. If set, then the button is disabled and does nothing
    */
    public function __construct
    (
         private RichText $text,
         private ?string $style = null,
         private ?string $url = null,
         private ?string $callbackData = null,
         private ?WebAppInfo $webApp = null,
         private ?LoginUrl $loginUrl = null,
         private ?string $switchInlineQuery = null,
         private ?string $switchInlineQueryCurrentChat = null,
         private ?SwitchInlineQueryChosenChat $switchInlineQueryChosenChat = null,
         private ?CopyTextButton $copyText = null,
         private ?DisabledButton $disabled = null
    ) {}
    
    /**
     * @return RichText
     */
    public function getText(): RichText
    {
        return $this->text;
    }

    /**
     * @return string|null
     */
    public function getStyle(): ?string
    {
        return $this->style;
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @return string|null
     */
    public function getCallbackData(): ?string
    {
        return $this->callbackData;
    }

    /**
     * @return WebAppInfo|null
     */
    public function getWebApp(): ?WebAppInfo
    {
        return $this->webApp;
    }

    /**
     * @return LoginUrl|null
     */
    public function getLoginUrl(): ?LoginUrl
    {
        return $this->loginUrl;
    }

    /**
     * @return string|null
     */
    public function getSwitchInlineQuery(): ?string
    {
        return $this->switchInlineQuery;
    }

    /**
     * @return string|null
     */
    public function getSwitchInlineQueryCurrentChat(): ?string
    {
        return $this->switchInlineQueryCurrentChat;
    }

    /**
     * @return SwitchInlineQueryChosenChat|null
     */
    public function getSwitchInlineQueryChosenChat(): ?SwitchInlineQueryChosenChat
    {
        return $this->switchInlineQueryChosenChat;
    }

    /**
     * @return CopyTextButton|null
     */
    public function getCopyText(): ?CopyTextButton
    {
        return $this->copyText;
    }

    /**
     * @return DisabledButton|null
     */
    public function getDisabled(): ?DisabledButton
    {
        return $this->disabled;
    }
}
