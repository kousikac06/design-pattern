<?php

namespace App\Pattern\TemplateMethod;

abstract class ShakeDrink
{
    public function makeDrink() : array
    {
        $flow = [];

        $flow[] = $this->boilTea();
        $flow[] = $this->addMixture();
        $flow[] = $this->shake();
        $flow[] = $this->pourIntoCup();

        return $flow;
    }

    abstract function boilTea() : string;

    abstract function addMixture() : string;

    public function shake() : string
    {
        return 'Shaking';
    }

    public function pourIntoCup() : string
    {
        return 'Pour into cup';
    }
}
