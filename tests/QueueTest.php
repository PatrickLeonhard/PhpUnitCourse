<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    protected function setUp(): void
    {
        $this->queue = new Queue();
    }
    protected function tearDown(): void
    {
        unset($this->queue);
    }
    public function testQueueIsEmpty(){
        self::assertEquals(0, $this->queue->getCount());
    }

    public function testAnItemIsAddedToTheQueue(){
        $this->queue->push('test');
        self::assertEquals(1, $this->queue->getCount());
    }

    public function testAnItemIsRemovedFromTheQueue(){
        $this->queue->push('test');
        $item = $this->queue->pop();

        self::assertEquals(0, $this->queue->getCount());
        self::assertEquals('test', $item);
    }

    public function testIfAnItemIsRemovedFromTheFrontOfTheQueue(){
        $this->queue->push('test1');
        $this->queue->push('test2');
        $item1 = $this->queue->pop();
        $item2 = $this->queue->pop();

        self::assertEquals('test1', $item1);
        self::assertEquals('test2', $item2);
    }
}