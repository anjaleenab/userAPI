<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
* sets up a route that will use the createUser function
* that is located in the UserController to respond to a POST request
*/

Route::post('/users/create', 'UserController@createUser');

/*
* sets up a route that will use the getUsers function
* that is located in the UserController to respond to a GET request
*/

Route::get('/users', 'UserController@getUsers');

/*
* sets up a route that will use the updateUser function
* that is located in the UserController to respond to a POST request
*/

Route::post('/users/update/{id}', 'UserController@updateUser');
