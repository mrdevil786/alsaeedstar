<?php

use App\Http\Controllers\Frontend\BasicController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index'])->name('frontend.home');
Route::get('/about',[BasicController::class,'about'])->name('frontend.about');
Route::get('/service',[BasicController::class,'service'])->name('frontend.service');
Route::get('/contact',[ContactController::class,'index'])->name('frontend.contact');
Route::post('/contact',[ContactController::class,'store'])->name('frontend.contact.store');