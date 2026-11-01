<?php

declare(strict_types=1);

namespace Phppride\TelegramBot\Entity;

/**
 * A block with a mathematical expression in LaTeX format, corresponding to the custom HTML tag <tg-math-block>.
 *
 * @see https://core.telegram.org/bots/api#inputrichblockmathematicalexpression
 */
final class InputRichBlockMathematicalExpression
{
    /**
     * @param string $type Type of the block, always "mathematical_expression"
     * @param string $expression The mathematical expression in LaTeX format
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
