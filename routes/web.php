<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'index')->name('home');
});

Route::controller(HomeController::class)->group(function(){
    Route::get('/developers', 'developers')->name('developers');
});
