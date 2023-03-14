<?php

namespace App\Pattern\Builder;

class ICMShop
{
    private ICMMakerBuilder $icmMakerBuilder;   //混合器 - Mixer

    public function setICMMakerBuilder(ICMMakerBuilder $icmMakerBuilder): void
    {
        $this->icmMakerBuilder = $icmMakerBuilder;
    }

    public function makerHasCP(): ICMMaker
    {
        $icmMaker = $this->icmMakerBuilder
            ->setMXR('Breville')
            ->setMTR('KitchenAid')
            ->setFB('Breville')
            ->setVAL('Cuisinart')
            ->setCP('Breville')
            ->build();

        return $icmMaker;
    }

    public function makerNoCP(): ICMMaker
    {
        $icmMaker = $this->icmMakerBuilder
            ->setMXR('Cuisinart')
            ->setMTR('Whynter')
            ->setFB('Cuisinart')
            ->setVAL('Cuisinart')
            ->build();

        return $icmMaker;
    }
}
