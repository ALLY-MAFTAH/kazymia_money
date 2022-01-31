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
    return view('Home/welcome');
});

// LANGUAGE CHANGE
Route::get('lang/{locale}', [App\Http\Controllers\LocalizationController::class, 'index']);

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

