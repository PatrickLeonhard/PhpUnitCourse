<?php
declare(strict_types=1);


use PHPUnit\Framework\TestCase;
use Mockery\Adapter\Phpunit\MockeryTestCase;

class ExampleTest extends MockeryTestCase
{
    public function testAddingTwoPlusTwo()
    {
        $this->assertEquals(4, 2 + 2);
    }
}