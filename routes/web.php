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



$router->get('/', 'MainController@main');

$router->get('/napis', 'MainController@napis');
$router->get('/napis/{imie}', 'MainController@napisImie');

$router->get('/api/dragons', 'ApiController@dragons');
$router->get('/api/dragonlist', 'ApiController@dragonList');

$router->get('/api/saddlelist', 'ApiController@saddles');
$router->get('/api/saddlesfull', 'ApiController@saddlesFull');

$router->get('/api/saddlegood', 'ApiController@goodSaddles');
$router->get('/api/ridersaddle', 'ApiController@riderSaddle');
