<?php

namespace App\Http\Controllers\Api;

use Laravel\Lumen\Routing\Controller as BaseController;

class HelloController extends BaseController
{
    public function index()
    {
        return response()->json(['message' => 'hello world']);
    }
}
