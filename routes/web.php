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


Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index');

Route::get('/bill', 'BillController@index');

Route::get('/config', 'ConfigController@index');

Route::get('/contract', 'ContractController@index');

Route::get('/login', 'LoginController@index');

Route::get('/order', 'OrderController@order');

Route::get('/order_history', 'OrderController@orderHistory');

Route::get('/product', 'ProductController@index');

Route::get('/register', 'RegisterController@index');

Route::get('/report', 'ReportController@index');

Route::get('/support', 'SupportController@index');
