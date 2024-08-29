<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LoginController::class, 'index']);
Route::post('action-login', [LoginController::class, 'actionLogin'])->name('action-login');

Route::resource('dashboard', DashboardController::class);
Route::resource('profile', ProfileController::class);
Route::resource('experience', ExperienceController::class);
