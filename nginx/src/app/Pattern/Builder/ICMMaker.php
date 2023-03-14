<?php

namespace App\Pattern\Builder;

class ICMMaker
{
    private $mxr;   //混合器 - Mixer
    private $mtr;   //電動馬達 - Motor
    private $fb;    //結冰桶 - Freezer bowl
    private $val;   //閥門 - Valve
    private $cp;    //控制面板 - Control panel

    public function __construct($mxr = null, $mtr = null, $fb = null, $val = null, $cp = null)
    {
        $this->mxr = $mxr;
        $this->mtr = $mtr;
        $this->fb  = $fb;
        $this->val = $val;
        $this->cp  = $cp;
    }

    public function info(): string
    {
        $info = [
            "MXR" => $this->mxr,
            "MTR" => $this->mtr,
            "FB"  => $this->fb,
            "VAL" => $this->val,
            "CP"  => $this->cp,
        ];

        return json_encode($info);
    }
}
