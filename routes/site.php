<?php

use App\Http\Controllers\Frontend\BasicController;
use Illuminate\Support\Facades\Route;

Route::get('/',[BasicController::class,'home'])->name('frontend.home');
Route::get('/about',[BasicController::class,'about'])->name('frontend.about');
Route::get('/contact',[BasicController::class,'contact'])->name('frontend.contact');