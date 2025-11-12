<?php

use Shish\PhpstanMatchyString\MatchyStringType;

class MatchyStringTypeTest extends \PHPUnit\Framework\TestCase
{
    public function testSomething(): void
    {
        $ms = new MatchyStringType("test", fn (string $a): bool => true);
        self::assertEquals("test", $ms->name);
    }
}
