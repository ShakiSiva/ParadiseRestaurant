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
Route::get ( '/',  function() {
    return view ( 'auth/login' );
} );
Route::get('/makeOrder', 'orderController@index')->name('makeOrder')->middleware('auth');
Route::post('/order', 'orderController@order');

Route::post('/loginsuccess','authController@signIn');
Route::get('/orders', 'orderController@showOrder')->middleware('auth');
Route::get('/reports', 'orderController@makeReports')->middleware('auth');

Auth::routes();

