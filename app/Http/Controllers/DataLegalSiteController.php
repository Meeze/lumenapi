<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class DataLegalSiteController extends BaseController
{
    public function index()
    {
        return view('datalegal');
    }
}
