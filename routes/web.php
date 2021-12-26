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

// Simplified version of get page
// Landing Page - INDEX beans
Route::get('/', 'App\Http\Controllers\BeansController@list');

// First argument - url, second argument - view
Route::get('beans', 'App\Http\Controllers\BeansController@list');

// CREATE Beans
Route::post('beans', 'App\Http\Controllers\BeansController@store');

// UPDATE Beans
Route::get('beans/{beans}/edit', 'App\Http\Controllers\BeansController@edit');
