<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * Describes a story area pointing to a suggested reaction. Currently, a story can have up to 5 suggested reaction areas.
 *
 * @see https://core.telegram.org/bots/api#storyareatypesuggestedreaction
 */
final class StoryAreaTypeSuggestedReaction
{
    /**
     * @param string $type Type of the area, always "suggested_reaction"
     * @param ReactionType $reactionType Type of the reaction
     * @param bool|null $isDark Optional. Pass True if the reaction area has a dark background
     * @param bool|null $isFlipped Optional. Pass True if reaction area corner is flipped
    */
    public function __construct
    (
         private string $type,
         private ReactionType $reactionType,
         private ?bool $isDark = null,
         private ?bool $isFlipped = null
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return ReactionType
     */
    public function getReactionType(): ReactionType
    {
        return $this->reactionType;
    }

    /**
     * @return bool|null
     */
    public function getIsDark(): ?bool
    {
        return $this->isDark;
    }

    /**
     * @return bool|null
     */
    public function getIsFlipped(): ?bool
    {
        return $this->isFlipped;
    }
}
