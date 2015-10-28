<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('main');
});


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');


//Admin Routes
Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin',['uses' => 'DashboardController@index']);
    Route::get('/admin/movies',['uses' => 'MovieController@adminIndex']);
    Route::get('/admin/movies/new/',['uses' => 'MovieController@create']);
    Route::post('/admin/movies/store/',['uses' => 'MovieController@store']);
    Route::get('/admin/movies/update/{id}',['uses' => 'MovieController@edit']);
    Route::post('/admin/movies/update/',['uses' => 'MovieController@update']);
    Route::get('/admin/movies/delete/',['uses' => 'MovieController@destroy']);
});



// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::get('api/movies', ['uses'=>'MovieController@index']);
Route::post('api/result', ['uses'=>'ResultController@store']);