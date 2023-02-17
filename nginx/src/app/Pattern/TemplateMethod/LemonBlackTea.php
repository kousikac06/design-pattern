<?php

namespace App\Pattern\TemplateMethod;

class LemonBlackTea extends ShakeDrink
{
    public function boilTea() : string
    {
        return 'Boil black tea';
    }

    public function addMixture() : string
    {
        return 'Add lemon';
    }
}
