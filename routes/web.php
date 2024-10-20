<?php

use App\Http\Controllers\FarmerController;
use App\Http\Controllers\LandController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('lands', LandController::class);


Route::middleware(['auth'])->group(function () {
    Route::resource('farmers', FarmerController::class);
});
