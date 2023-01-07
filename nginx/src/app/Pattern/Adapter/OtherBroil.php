<?php

namespace App\Pattern\Adapter;

class OtherBroil
{
    protected $foods;

    public function description(): string
    {
        return '開始燉(其他)';
    }

    public function isEmpty(): bool
    {
        return count($this->foods) === 0;
    }

    public function addFood(Food $food): void
    {
        $this->foods[] = $food;
    }

    public function getFoods(): array
    {
        return $this->foods;
    }
}
