<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SaleController;

Route::redirect('', '/home');
Route::resource('/home', HomeController::class);
Route::resource('/user', UserController::class);
Route::resource('/product', ProductController::class);
Route::resource('/client', ClientController::class);
Route::resource('/sale', SaleController::class);

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/login', HomeController::class)
        ->middleware(Auth::check());
});

Auth::routes();

Route::fallback(function () {
    return view("site.page-not-found");
});
