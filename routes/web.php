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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/users', 'UserController');
Route::resource('/roles', 'RoleController');
Route::resource('/departaments', 'DepartamentController');
Route::resource('/warnings', 'WarningController');
Route::resource('/categories', 'CategoryController')->except('show');
Route::get('/pricing', 'PricingController@index')->name('pricing.index');
