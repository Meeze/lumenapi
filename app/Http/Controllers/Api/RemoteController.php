<?php

namespace App\Http\Controllers\Api;

use Laravel\Lumen\Routing\Controller as BaseController;
use function App\Http\Controllers\Api\Services\response;

class RemoteController extends BaseController
{
    public function index()
    {
        // Placeholder for remote client control logic
        return response()->json(['message' => 'remotecontroller endpoint']);
    }
}
