<?php

namespace App\Tests\Unit\Entity;

use PHPUnit\Framework\TestCase;

class DinosaurTest extends TestCase
{
    public function testIsWorks(): void{
    self::assertEquals('42',42);
    }

    public function testItWorksTheSame(): void
    {
        self::assertSame('42',42);
    }
}