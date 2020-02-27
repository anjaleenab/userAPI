<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
|
*/



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
