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
// route to show the login form
Route::get('login', array('uses' => 'HomeController@showLogin'))->name('login');

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));
Route::get('dashboard', array('uses' => 'HomeController@showDashboard'));
Route::get('logout', array('uses' => 'HomeController@doLogout'))->name('logout');