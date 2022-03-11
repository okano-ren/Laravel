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

use App\Http\Controllers\Jissyu4_1Controller;
use App\Http\Middleware\HelloMiddleware;
//テキスト用

Route::get('/', function () {
    return view('welcome');
});



Route::get('hello','HelloController@index');

Route::post('hello','HelloController@post');


// 実習問題用
// 2-1
Route::get('jissyu', 'JissyuController@index');

// 3-2
Route::get('jissyu4','Jissyu3_2Controller@index');
Route::post('jissyu4', 'Jissyu3_2Controller@post');

//3-3
Route::get('jissyu5','Jissyu3_3Controller@index');

//4-1
Route::get('jissyu6','Jissyu4_1Controller@index');
Route::post('jissyu6','Jissyu4_1Controller@post');