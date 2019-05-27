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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [
    'as' => 'index', 
    'uses' => 'MainController@index'
]);
Route::get('introduce', [
    'as' => 'introduce', 
    'uses' => 'MainController@introduce'
]);
Route::get('contact', [
    'as' => 'contact', 
    'uses' => 'MainController@contact'
]);
Route::get('price', [
    'as' => 'price', 
    'uses' => 'MainController@price'
]);
Route::get('service', [
    'as' => 'service', 
    'uses' => 'MainController@service'
]);