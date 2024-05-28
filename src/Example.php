<?php

declare(strict_types=1);

namespace App;

class Example
{
    public function __construct(private string $value)
    {
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
