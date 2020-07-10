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
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');


Route::resource('barangs', 'barangController');

Route::resource('companies', 'companyController');

Route::resource('menus', 'menuController');

Route::resource('orders', 'orderController');

Route::resource('orderDetails', 'order_detailController');

Route::resource('roles', 'roleController');

Route::resource('roleDetails', 'role_detailController');

Route::resource('users', 'UserController')->middleware('auth');
