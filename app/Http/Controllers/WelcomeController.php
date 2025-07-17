<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class WelcomeController extends BaseController
{
    public function index()
    {
        return view('welcome');
    }
}
