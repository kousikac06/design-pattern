<?php

namespace App\Pattern\Observer;

class Fan implements Observer
{
    public function notify(): string
    {
        return '好開心，又出新品了！';
    }
}
