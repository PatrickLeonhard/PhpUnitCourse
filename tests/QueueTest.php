<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    public function testQueueIsEmpty(){
        $queue = new Queue();
        self::assertEquals(0, $queue->getCount());
    }
}