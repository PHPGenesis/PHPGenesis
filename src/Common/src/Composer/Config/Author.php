<?php

namespace PHPGenesis\Common\Composer\Config;

class Author
{
    public ?string $name;
    public ?string $email;
    public ?string $homepage;
    public ?string $role;

    public function __construct()
    {
        $this->name = 'Your Name';
        $this->email = 'you@example.com';
        $this->role = 'Developer';
    }
}