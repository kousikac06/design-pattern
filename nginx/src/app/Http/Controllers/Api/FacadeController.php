<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Model\User;
use App\Pattern\Facade\SoupFacade;
use Illuminate\Http\Request;

class FacadeController extends Controller
{
    protected $soupFacade;

    public function __construct(SoupFacade $soupFacade)
    {
        $this->soupFacade = $soupFacade;
    }

    public function cookSoup()
    {
        return $this->soupFacade->cookSoup();
    }

    public function AfterCookClean()
    {
        return $this->soupFacade->afterCookClean();
    }
}
