<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/transfer','OperationController@makeTransfer');

Route::POST('/store-transfer','OperationController@storeTransfer'); //uzklausa

Route::get('/control_transfer', 'OperationController@showTransfers');

Route::get('/logout', 'HomeController@atsijungti');
