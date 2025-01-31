<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
class UserTest extends TestCase
{
    public function testReturnFullName()
    {
        $user = new User();

        $user->firstName = 'John';
        $user->surname = 'Doe';

        $this->assertEquals('John Doe', $user->getFullName());
    }

    public function testFullNameIsEmptyByDefault()
    {
        $user2 = new User();
        $user2->firstName = '';
        $user2->surname = '';

        $this->assertEquals(' ', $user2->getFullName());
    }

    /**
     * @test
     */
    public function userHasFirstName()
    {
        $user = new User();

        $user->firstName = 'Teresa';

        $this->assertEquals('Teresa', $user->firstName);
    }

    public function testNotificationIsSent()
    {
        $user = new User();

        $mockMailer = $this->createMock(Mailer::class);
        $mockMailer->method('sendMessage')->willReturn(true);

        $user->email = 'john@test.com';
        $user->setMailer($mockMailer);

        $this->assertTrue($user->notify("Hello"));
    }
}