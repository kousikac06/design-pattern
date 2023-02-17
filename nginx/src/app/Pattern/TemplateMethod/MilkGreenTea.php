<?php

namespace App\Pattern\TemplateMethod;

class MilkGreenTea extends ShakeDrink
{
    public function boilTea() : string
    {
        return 'Boil green tea';
    }

    public function addMixture() : string
    {
        return 'Add milk';
    }
}
