<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::resource('/', HomeController::class)->middleware('auth');
Route::resource('/home', HomeController::class)->middleware('auth');
Route::resource('/users', UserController::class)->middleware('auth');
Route::resource('/products', ProductController::class)->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/login', HomeController::class)
        ->middleware(Auth::check());
});

Auth::routes();
