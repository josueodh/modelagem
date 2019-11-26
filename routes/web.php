<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/', function () {
        return view('welcome');
    })->name('home.index');
    Route::resource('/users', 'UserController');
    Route::resource('/departaments', 'DepartamentController');
    Route::resource('/roles', 'RoleController');
    Route::resource('/warnings', 'WarningController');
    Route::resource('/categories', 'CategoryController')->except('show');
    Route::resource('/projects', 'ProjectController');
    Route::resource('/clients', 'ClientController');
    Route::resource('/events', 'EventController');
    Route::get('/pricing', 'PricingController@index')->name('pricing.index');
});
