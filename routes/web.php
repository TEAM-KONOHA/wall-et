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

/* Route::get('/', function () {
    return view('welcome');
}); */


// Index page / Dashboard
Route::get('/', 'App\Http\Controllers\WalletController@dashboard_1');
Route::get('/index', 'App\Http\Controllers\WalletController@dashboard_1');

// Dashboard coin-details tab
Route::get('/coin-details', 'App\Http\Controllers\WalletController@coin_details');

// Dashboard market-captial tab
Route::get('/market-capital', 'App\Http\Controllers\WalletController@market_capital');
