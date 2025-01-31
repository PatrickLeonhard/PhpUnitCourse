<?php

class User
{
    public string $firstName;

    public string $surname;

    public string $email;

    public Mailer $mailer;

    public function setMailer(Mailer $mailer): User
    {
        $this->mailer = $mailer;
        return $this;
    }

    public function getFullName(): string
    {
        return $this->firstName . ' ' . $this->surname;
    }

    public function notify(string $message): bool
    {
        return $this->mailer->sendMessage($this->email, $message);
    }
}