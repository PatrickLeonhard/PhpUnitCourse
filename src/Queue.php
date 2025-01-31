<?php

class Queue
{
    protected $items = array();

    public function push(mixed $item): void
    {
        $this->items[] = $item;
    }

    public function pop(): mixed
    {
        return array_pop($this->items);
    }

    public function getCount(): int
    {
        return count($this->items);
    }

}