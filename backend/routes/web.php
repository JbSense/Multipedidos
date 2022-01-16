<?php

use App\Http\Middleware\FrontMiddleware;
use App\Http\Controllers\ {
    UserController,
};

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->group(['prefix' => 'backend'], function () use ($router) {
    $router->post('store-user', 'UserController@store');
    $router->post('update-user', 'UserController@update');
    $router->post('delete-user/{id}', 'UserController@delete');
    $router->get('get-user/{id}', 'UserController@getUser');
    $router->get('get-all-users/', 'UserController@getAllUsers');
});