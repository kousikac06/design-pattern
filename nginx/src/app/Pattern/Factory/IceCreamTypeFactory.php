<?php

namespace App\Pattern\Factory;

use Exception;

class IceCreamTypeFactory
{
    public function getButterfatStrategy($type): ButterfatStrategy
    {
        switch ($type) {
            case 'AmericaIceCream':
                return new AmericaIceCreamBuf();
            case 'SoftServedIceCream':
                return new SoftServedIceCreamBuf();
            case 'Gelato':
                return new GelatoBuf();
            default:
                throw new Exception('type not exists');
        }
    }
}
