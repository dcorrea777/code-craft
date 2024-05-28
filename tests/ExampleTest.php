<?php

declare(strict_types=1);

namespace Tests;

use App\Example;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    #[Test]
    #[DataProvider('exampleProvider')]
    public function example(string $message): void
    {
        $example = new Example($message);

        Assert::assertSame('Hello', $example->getValue());
    }

    /**
     * @return array<string, array<int, string>>
     */
    public static function exampleProvider(): array
    {
        return ['Message' => ['Hello']];
    }
}
