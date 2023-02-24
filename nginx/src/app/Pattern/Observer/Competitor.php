<?php

namespace App\Pattern\Observer;

class Competitor implements Observer
{
    public function notify(): string
    {
        return '可惡，又出新品來跟我們搶生意！';
    }
}
