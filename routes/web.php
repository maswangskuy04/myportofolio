<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PortoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LoginController::class, 'index']);
Route::post('action-login', [LoginController::class, 'actionLogin'])->name('action-login');
Route::post('destroy', [LoginController::class, 'logout'])->middleware('auth')->name('destroy');

Route::resource('dashboard', DashboardController::class);
Route::resource('user', UserController::class);
Route::get('user/{user}', [UserController::class, 'show']);
Route::resource('experience', ExperienceController::class);
Route::resource('education', EducationController::class);
Route::resource('skill', SkillController::class);

// route portofolio
Route::get('ui', [PortoController::class, 'layout']);
