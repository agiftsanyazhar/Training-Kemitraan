<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\UserController;
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

// ===================================================
// ==================== Dashboard ====================
// ===================================================
Route::get('/', [IndexController::class, 'index'])->middleware('auth');
Route::get('/pengaturan', [IndexController::class, 'pengaturan'])->middleware('auth');
Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');
Route::get('/brand', [BrandController::class, 'index']);
Route::get('/gudang', [GudangController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);

// ===================================================
// ==================== Sign up ======================
// ===================================================
Route::get('/sign-up', [SignUpController::class, 'index']);
Route::post('/proses-sign-up', [SignUpController::class, 'store']);

// =================================================
// ==================== Sign in ====================
// =================================================
Route::get('/sign-in', [SignInController::class, 'index'])->name('login');
Route::post('/proses-sign-in', [SignInController::class, 'authenticate']);

// ==================================================
// ==================== Sign out ====================
// ==================================================
Route::post('/logout', [SignInController::class, 'logout']);

// ================================================
// ==================== CRUD ======================
// ================================================
// Brand
Route::get('/create-brand', [BrandController::class, 'create'])->name('login');
Route::get('/form-edit-brand-', [BrandController::class, 'edit'])->name('login');

// Gudang
Route::get('/create-gudang', [GudangController::class, 'create'])->name('login');
Route::get('/form-edit-gudang-', [GudangController::class, 'edit'])->name('login');

// Kategori
Route::get('/create-kategori', [KategoriController::class, 'create'])->name('login');
Route::get('/form-edit-kategori-', [KategoriController::class, 'edit'])->name('login');