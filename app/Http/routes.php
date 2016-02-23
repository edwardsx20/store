<?php
/*
Route::get('/', function () {
    $people = ['Taylor', 'Matt', 'Jeffrey'];

    return view('welcome', compact('people'));
});
*/

Route::get('/', 'StoreController@index');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();

	Route::get('/cart', 'HomeController@cart');
    Route::get('/home', 'StoreController@index');
	Route::get('/users', 'StoreController@index');
});
