<?php

namespace App\Pattern\Observer;

use App\Pattern\Observer\Subject;

class IceCreamFanPage extends Subject
{
    public function notify(): array
    {
        $response = [];

        foreach ($this->trackList as $track) {
            $response[] = $track->notify();
        }

        return $response;
    }
}
