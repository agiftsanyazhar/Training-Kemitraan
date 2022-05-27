<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignUpController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', [IndexController::class, 'index'])->middleware('auth');
Route::get('/profile', [ProfileController::class, 'index']);

//===================Sign in==============
Route::get('/sign-in', [SignInController::class, 'index'])->name('login');
Route::post('/proses-sign-in', [SignInController::class, 'authenticate']);

//===================Sign up==============
Route::get('/sign-up', [SignUpController::class, 'index']);
Route::post('/proses-sign-up', [SignUpController::class, 'store']);

//===================Sign Out=============
Route::post('/logout', [SignInController::class, 'logout']);
