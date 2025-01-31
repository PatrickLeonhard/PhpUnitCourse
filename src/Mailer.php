<?php
declare(strict_types=1);

class Mailer
{
    public function sendMessage(string $email, string $message): bool
    {
        sleep(3);
        echo "Send" . $message . "to" . $email;
        return true;
    }
}