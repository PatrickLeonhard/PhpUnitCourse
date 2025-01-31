<?php

class Queue
{
    public const MAX_ITEMS = 5;
    protected $items = array();

    /**
    * @param mixed $item
     *
    * @throws QueueException
    */
    public function push(mixed $item): void
    {
        if($this->getCount() >= self::MAX_ITEMS) {
            throw new QueueException("Queue is full");
        }
        $this->items[] = $item;
    }

    public function pop(): mixed
    {
        return array_shift($this->items);
    }

    public function getCount(): int
    {
        return count($this->items);
    }
}