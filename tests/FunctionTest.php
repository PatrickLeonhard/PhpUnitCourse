<?php

use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase{
    public function testAddReturnsTheCorrectSum(){
        $functions = new Functions();
        $this->assertEquals(5, $functions->add(3, 2));
    }

    public function testAddDoesNotReturnTheCorrectSum(){
        $functions = new Functions();
        $this->assertNotEquals(5, $functions->add(2, 2));
    }
}