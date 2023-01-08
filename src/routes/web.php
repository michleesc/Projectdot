<?php

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

$router->group(['prefix' => 'api/v1/testing'], function() use ($router){
    $router->get('/', ['uses' => 'UserController@index']);
	$router->post('/', ['uses' => 'UserController@create ']);
	$router->get('/{id}', ['uses' => 'UserController@show']);
	$router->delete('/{id}', ['uses' => 'UserController@destroy']);
	$router->put('/{id}', ['uses' => 'UserController@update']);
});

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// route homepage
// Route::get('/home','HomepageController@index');

// route karyawans
Route::get('/api/v1/karyawans/detail','KaryawansController@detail');
Route::get('/api/v1/karyawans/','KaryawansController@index');
Route::post('/api/v1/karyawans/','KaryawansController@create');
Route::put('/api/v1/karyawans/{id}','KaryawansController@update');
Route::get('/api/v1/karyawans/{id}','KaryawansController@show');
Route::delete('/api/v1/karyawans/{id}','KaryawansController@destroy');

// route jabatan
Route::get('/api/v1/jabatans/','JabatansController@index');
Route::post('/api/v1/jabatans/','JabatansController@create');
Route::put('/api/v1/jabatans/{id}','JabatansController@update');
Route::get('/api/v1/jabatans/{id}','JabatansController@show');
Route::delete('/api/v1/jabatans/{id}','JabatansController@destroy');

// route penggajian
Route::get('/api/v1/penggajians/','PenggajiansController@index');
Route::post('/api/v1/penggajians/','PenggajiansController@create');
Route::put('/api/v1/penggajians/{id}','PenggajiansController@update');
Route::get('/api/v1/penggajians/{id}','PenggajiansController@show');
Route::delete('/api/v1/penggajians/{id}','PenggajiansController@destroy');