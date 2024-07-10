<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;




Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about',[AboutController::class,"index"])->name('about');
Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::get('/blog',[BlogController::class,'index'])->name('blog');
