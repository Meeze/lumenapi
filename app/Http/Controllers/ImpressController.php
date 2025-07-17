<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class ImpressController extends BaseController
{
    public function index()
    {
        return view('impress');
    }
}
