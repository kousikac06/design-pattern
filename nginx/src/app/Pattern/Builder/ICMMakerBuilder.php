<?php

namespace App\Pattern\Builder;

abstract class ICMMakerBuilder
{
    abstract function setMXR(string $mxr): ICMMakerBuilder;
    abstract function setMTR(string $mtr): ICMMakerBuilder;
    abstract function setFB(string $fb): ICMMakerBuilder;
    abstract function setVAL(string $val): ICMMakerBuilder;
    abstract function setCP(string $cp): ICMMakerBuilder;
    abstract function build(): ICMMaker;
}
