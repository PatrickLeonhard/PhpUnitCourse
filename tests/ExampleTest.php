<?php
declare(strict_types=1);


use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testAddingTwoPlusTwo()
    {
        $this->assertEquals(4, 2 + 2);
    }
}