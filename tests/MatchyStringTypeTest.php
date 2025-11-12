<?php

use Shish\PhpstanMatchyString\MatchyStringType;

class MatchyStringTypeTest extends \PHPUnit\Framework\TestCase
{
    public function testSomething(): void
    {
        $ms = new MatchyStringType("test", null);
        $this->assertEquals("test", $ms->name);
    }
}
