<?php

use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BasicController;
use App\Http\Controllers\Frontend\CareerController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index'])->name('frontend.home');
Route::get('/about',[AboutController::class,'index'])->name('frontend.about');
Route::get('/service',[ServiceController::class,'index'])->name('frontend.service');

Route::get('/career', [CareerController::class, 'index'])->name('frontend.career');
Route::get('/career/{job}', [CareerController::class, 'show'])->name('frontend.career-detail');
Route::post('/career/{job}/apply', [CareerController::class, 'apply'])->name('frontend.career-apply');

Route::get('/contact',[ContactController::class,'index'])->name('frontend.contact');
Route::post('/contact',[ContactController::class,'store'])->name('frontend.contact.store');
