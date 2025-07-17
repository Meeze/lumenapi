<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->group(['prefix' => 'api', 'middleware' => 'auth.apikey'], function () use ($router) {
    $router->get('/', 'Api\HelloController@index');
    $router->get('/services/remotecontroller', 'Api\RemoteController@index');
});
