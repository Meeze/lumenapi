<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Laravel\Lumen\Application(
    dirname(__DIR__)
);

$app->withFacades();
$app->withEloquent();

$app->register(Illuminate\View\ViewServiceProvider::class);
$app->configure('view');
$app->alias('view', Illuminate\View\Factory::class);


$app->routeMiddleware([
    'auth.basic' => App\Http\Middleware\BasicAuthMiddleware::class,
    'auth.admin' => App\Http\Middleware\LoginBasicAuth::class,
    'auth.apikey' => App\Http\Middleware\ApiKeyMiddleware::class,
]);



$app->router->group([
    'namespace' => 'App\Http\Controllers',
], function ($router) {
    require __DIR__.'/../routes/web.php';
    require __DIR__.'/../routes/api.php';
    require __DIR__.'/../routes/loggedin.php';
});

return $app;
