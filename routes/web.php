<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', 'UserController');
Route::resource('session', 'SessionController');

// Route::resource('orders', 'OrderController');
// Route::resource('store', 'StoreController');
// Route::resource('courier', 'CourierController');
// Route::resource('employee', 'EmployeeConroller');
// Route::resource('courier-service', 'CourierServiceController');
// Route::resource('roles', 'RoleController');