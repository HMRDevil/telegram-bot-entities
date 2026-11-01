<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * This object represents a block in a rich formatted message to be sent. Currently, it can be any of the following types:
 * - InputRichBlockParagraph
 * - InputRichBlockSectionHeading
 * - InputRichBlockPreformatted
 * - InputRichBlockFooter
 * - InputRichBlockDivider
 * - InputRichBlockMathematicalExpression
 * - InputRichBlockAnchor
 * - InputRichBlockList
 * - InputRichBlockBlockQuotation
 * - InputRichBlockExpandableBlockQuotation
 * - InputRichBlockPullQuotation
 * - InputRichBlockCollage
 * - InputRichBlockSlideshow
 * - InputRichBlockTable
 * - InputRichBlockDetails
 * - InputRichBlockMap
 * - InputRichBlockButtons
 * - InputRichBlockAnimation
 * - InputRichBlockAudio
 * - InputRichBlockDocument
 * - InputRichBlockPhoto
 * - InputRichBlockVideo
 * - InputRichBlockVoiceNote
 * - InputRichBlockThinking
 * 
 * @see https://core.telegram.org/bots/api#inputrichblock
 */
interface InputRichBlock {}
