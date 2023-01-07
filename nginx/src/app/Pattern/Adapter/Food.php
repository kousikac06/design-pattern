<?php

namespace App\Pattern\Adapter;

class Food
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = "$name(其他)";
    }

    public function setName(string $name): void
    {
        $this->name = "$name(其他)";
    }

    public function getName(): string
    {
        return $this->name;
    }
}
