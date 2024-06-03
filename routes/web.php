<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Dashboard route
Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

// Ensure all routes within this group require authentication
Route::group(['middleware' => 'auth'], function () {

    // User routes
    Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
    Route::patch('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
    Route::patch('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
    
    // Page route
    Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);

    // Product routes
    Route::resource('products', ProductController::class);

    // Transaction routes (add this if you have routes for transactions)
    // Route::resource('transactions', TransactionController::class);
});
