<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PromotionController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('reservations', ReservationController::class);
Route::resource('menu', MenuController::class);
Route::resource('promotions', PromotionController::class);
