<?php

namespace App\Pattern\Observer;

abstract class Subject
{
    protected $trackList;

    public function attach(Observer $observer): void
    {
        $this->trackList[] = $observer;
    }

    public function detach(Observer $observer): void
    {
        array_diff($this->trackList, [$observer]);
    }

    abstract function notify(): array;
}
