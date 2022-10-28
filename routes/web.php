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

Auth::routes(['register' => false]);

// Dashboard Home
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// User CRUD
Route::get('users/{id}/change-password', ['as' => 'users.change-password', 'uses' => '\App\Http\Controllers\UserController@changePassword']);
Route::patch('users/{id}/change-password', ['as' => 'users.change-password', 'uses' => '\App\Http\Controllers\UserController@changePassword']);
Route::resource('users', App\Http\Controllers\UserController::class)->middleware('auth');