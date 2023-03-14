<?php

namespace App\Pattern\Builder;

class ICMMakerFactory extends ICMMakerBuilder
{
    private $mxr;   //混合器 - Mixer
    private $mtr;   //電動馬達 - Motor
    private $fb;    //結冰桶 - Freezer bowl
    private $val;   //閥門 - Valve
    private $cp;    //控制面板 - Control panel

    public function setMxr(string $mxr): ICMMakerBuilder
    {
        $this->mxr = $mxr;
        return $this;
    }

    public function setMtr(string $mtr): ICMMakerBuilder
    {
        $this->mtr = $mtr;
        return $this;
    }

    public function setFb(string $fb): ICMMakerBuilder
    {
        $this->fb = $fb;
        return $this;
    }

    public function setVal(string $val): ICMMakerBuilder
    {
        $this->val = $val;
        return $this;
    }

    public function setCp(string $cp): ICMMakerBuilder
    {
        $this->cp = $cp;
        return $this;
    }

    function build(): ICMMaker
    {
        return new ICMMaker($this->mxr, $this->mtr, $this->fb, $this->val, $this->cp);
    }
}
