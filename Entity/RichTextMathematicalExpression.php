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
     * @var string $type Type of the rich text, always “mathematical_expression”
     */
    private string $type = 'mathematical_expression';

    /**
     * @param string $expression The expression in LaTeX format
    */
    public function __construct
    (
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
