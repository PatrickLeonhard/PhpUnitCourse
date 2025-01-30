<?php

use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase{
    public function testAddReturnsTheCorrectSum(){
        require 'src/functions.php';
        $this->assertEquals(5, add(3, 2));
    }

    public function testAddDoesNotReturnTheCorrectSum(){
        $this->assertNotEquals(5, add(2, 2));
    }
}