<?php

namespace App\Http\Controllers\LoggedIn;

use Laravel\Lumen\Routing\Controller as BaseController;

class ToolsController extends BaseController
{
    public function index()
    {
        return view('tools');
    }
}
