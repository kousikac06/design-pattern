<?php

namespace App\Pattern\Observer;

interface Observer
{
    public function notify(): string;
}
