<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    public function testQueueIsEmpty(){
        $queue = new Queue();
        self::assertEquals(0, $queue->getCount());
        return $queue;
    }

    /**
     * @depends testQueueIsEmpty
     */
    public function testAnItemIsAddedToTheQueue(Queue $queue){
        $queue->push('test');
        self::assertEquals(1, $queue->getCount());
        return $queue;
    }

    /**
     * @depends testAnItemIsAddedToTheQueue
     */
    public function testAnItemIsRemovedFromTheQueue(Queue $queue){
        $item = $queue->pop();

        self::assertEquals(0, $queue->getCount());
        self::assertEquals('test', $item);
    }
}