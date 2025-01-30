<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testReturnFullName()
    {
        require 'src/User.php';

        $user = new User();

        $user->firstName = 'John';
        $user->surname = 'Doe';

        $this->assertEquals('John Doe', $user->getFullName());
    }

    public function testFullNameIsEmptyByDefault()
    {
        $user2 = new User();

        $this->assertEquals(' ', $user2->getFullName());
    }
}