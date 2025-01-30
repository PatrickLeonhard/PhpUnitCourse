<?php

class User
{
    public string $firstName;

    public string $surname;

    public function getFullName(): string
    {
        return $this->firstName . ' ' . $this->surname;
    }
}