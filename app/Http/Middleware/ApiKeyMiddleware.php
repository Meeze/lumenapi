<?php

namespace App\Http\Middleware;

use Closure;

class ApiKeyMiddleware
{
    public function handle($request, Closure $next)
    {
        $apiKey = $request->header('Authorization');
        if (!$apiKey || $apiKey !== env('API_KEY')) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return $next($request);
    }
}
