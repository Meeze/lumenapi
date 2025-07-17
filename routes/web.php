<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->group(['middleware' => 'auth.basic'], function () use ($router) {
    $router->get('/', 'WelcomeController@index');
});

