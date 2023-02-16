<?php

class UserProvider
{
    private array $accounts = [
        'Sergey' => 'qwerty',
        'admin' => 'admin',
        'root' => 'admin',
    ];

    public function getByUsernameAndPassword(string $username, string $password): ?User
    {
        $expectedPassword = $this->accounts[$username] ?? null;
        if ($expectedPassword === $password) {
            return new User($username);
        }
        return null;
    }
}