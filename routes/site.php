<?php

use App\Http\Controllers\Frontend\BasicController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'home'])->name('frontend.home');
Route::get('/about',[BasicController::class,'about'])->name('frontend.about');
Route::get('/service',[BasicController::class,'service'])->name('frontend.service');
Route::get('/contact',[BasicController::class,'contact'])->name('frontend.contact');