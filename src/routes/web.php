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
Route::get('/home','HomepageController@index');

// route karyawans
Route::get('/karyawans/view','KaryawansController@view');
Route::post('/karyawans','KaryawansController@store');
Route::get('/karyawans/edit/{id}','KaryawansController@edit');
Route::post('/karyawans/update','KaryawansController@update');
Route::get('/karyawans/hapus/{id}','KaryawansController@hapus');

// route jabatan
// Route::get('/jabatans/view','JabatansController@view');
// Route::post('/jabatans','JabatansController@store');
// Route::get('/jabatans/edit/{id}','JabatansController@edit');
// Route::post('/jabatans/update','JabatansController@update');
// Route::get('/jabatans/hapus/{id}','JabatansController@hapus');

// route penggajian
// Route::get('/penggajians/view','PenggajiansController@view');
// Route::post('/penggajians','PenggajiansController@store');
// Route::get('/penggajians/edit/{id}','PenggajiansController@edit');
// Route::post('/penggajians/update','PenggajiansController@update');
// Route::get('/penggajians/hapus/{id}','PenggajiansController@hapus');