<?php

namespace App\Http\Middleware;

use Closure;

class LoginBasicAuth
{
    public function handle($request, Closure $next)
    {
        // TODO change to oauth or some other login option
        $user = 'user';
        $pass = 'pass';

        if (
            !isset($_SERVER['PHP_AUTH_USER']) ||
            $_SERVER['PHP_AUTH_USER'] !== $user ||
            $_SERVER['PHP_AUTH_PW'] !== $pass
        ) {
            header('WWW-Authenticate: Basic realm="Protected Area"');
            header('HTTP/1.0 401 Unauthorized');
            echo 'Access denied';
            exit;
        }

        return $next($request);
    }
}
