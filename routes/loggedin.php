<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->group(['prefix' => 'mx', 'middleware' => 'auth.login'], function () use ($router) {
    $router->get('/', 'WelcomeController@index');
    // show ur user profile
    $router->get('/profile', 'LoggedIn\\ProfileController@index');
    // show ur available tools
    $router->get('/tools', 'LoggedIn\\ToolsController@index');
});
