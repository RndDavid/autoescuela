<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/questions/{category}', 'API\QuestionController@getTestsByCategory');
Route::get('/user_statistics', 'API\User_statisticController@index');
Route::post('/update_num_of_tests', 'API\UserController@updateNumberOfTests');
Route::post('/user_statistics', 'API\User_statisticController@store');
Route::get('/home/{path}', 'HomeController@index')->where('path','([A-z\d\-\/_.]+)?');
Route::get('/profile', 'HomeController@index')->middleware('auth');
Auth::routes();