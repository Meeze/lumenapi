<?php

namespace App\Http\Controllers\LoggedIn;

use Laravel\Lumen\Routing\Controller as BaseController;

class SettingsController extends BaseController
{
    public function index()
    {
        return view('settings');
    }
}
