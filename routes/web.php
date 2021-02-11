<?php

/** @var \Laravel\Lumen\Routing\Router $routerr */
use App\Http\Controllers\TareaController;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routers for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

/*$routerr->get('/', function () use ($routerr) {
    return $routerr->app->version();
});
*/

$router->get('/tareas','TareaController@index');
$router->post('/tareas','TareaController@store');
$router->get('/tareas/{tarea}','TareaController@show');
$router->put('/tareas/{tarea}','TareaController@update');
$router->patch('/tareas/{tarea}','TareaController@update');
$router->delete('/tareas/{tarea}','TareaController@destroy');