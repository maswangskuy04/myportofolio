<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LoginController::class, 'index']);
Route::get('login', [LoginController::class])->name('login');
Route::post('action-login', [LoginController::class, 'actionLogin'])->name('action-login');

Route::resource('dashboard', DashboardController::class);
Route::resource('user', UserController::class);
Route::resource('experience', ExperienceController::class);
Route::resource('education', EducationController::class);
