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

Route::get('/calc','helloContoller@index');
Route::post('/calc','helloContoller@add');

Route::get('/mul','mulController@index');
Route::post('/product','mulController@mul');