<?php
declare(strict_types=1);

class Mailer
{
    /**
     * @throws Exception
     */
    public function sendMessage(string $email, string $message): bool
    {
        if(empty($email))
        {
            throw new Exception;
        }
        sleep(3);
        echo "Send" . $message . "to" . $email;
        return true;
    }
}