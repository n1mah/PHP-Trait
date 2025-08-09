<?php
namespace Models;

use Traits\LoggerTrait;

class User
{
    use LoggerTrait;

    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->log("User '{$this->name}' created");
    }

    public function greet(): void
    {
        $this->log("Hello, I am {$this->name}");
    }
}
