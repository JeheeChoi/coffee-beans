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
// First argument - url, second argument - view
Route::view('/', 'welcome');

// Get request for beans and return the view of beans
Route::get('beans', 'App\Http\Controllers\BeansController@list');
