<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('pages.about');
Route::get('/services',[HomeController::class,'services'])->name('pages.services');
Route::get('/services',[HomeController::class,'services'])->name('pages.services');
Route::get('/contact',[HomeController::class,'contact'])->name('pages.contact');
Route::get('/gallery',[HomeController::class,'gallery'])->name('pages.gallery');
