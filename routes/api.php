<?php

use App\Http\Controllers\Api\AboutController;
use App\Http\Controllers\Api\HeroController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\TestimonialController;
use Illuminate\Support\Facades\Route;

Route::get('/hero', [HeroController::class, 'index']);
Route::get('/services', [ServiceController::class, 'index']);
Route::get('/testimonials', [TestimonialController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
