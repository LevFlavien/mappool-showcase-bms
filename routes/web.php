<?php

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

$router->get('/version', function () use ($router) {
    return $router->app->version();
});


    $router->get('/', 'ChartController@showLastUploaded');
    $router->get('/upload', [
        'as' => 'upload',
        'uses' => 'ChartController@upload',
    ]);
    $router->post('/upload', 'ChartController@save');



