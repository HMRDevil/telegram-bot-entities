<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A mathematical expression.
 *
 * @see https://core.telegram.org/bots/api#richtextmathematicalexpression
 */
final class RichTextMathematicalExpression
{
    /**
     * @param string $type Type of the rich text, always "mathematical_expression"
     * @param string $expression The expression in LaTeX format
    */
    public function __construct
    (
         private string $type,
         private string $expression
    ) {}
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getExpression(): string
    {
        return $this->expression;
    }
}
