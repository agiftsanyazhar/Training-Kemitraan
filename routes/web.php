<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\DaftarbarangController;
use App\Http\Controllers\DaftarmitraController;
use App\Http\Controllers\DaftarpesananController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\HadiahController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\KategoriBarangController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\StokController;
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
Route::get('/kategori', [KategoriBarangController::class, 'index']);
Route::get('/hadiah', [HadiahController::class, 'index']);
Route::get('/role', [RoleController::class, 'index'])->name('role');
Route::get('/user', [UserController::class, 'index']);
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/stok', [StokController::class, 'indexsum']);
Route::get('/riwayatstok', [StokController::class, 'index2']);
Route::get('/daftarpesanan', [DaftarpesananController::class, 'index']);
Route::get('/daftarmitra', [DaftarmitraController::class, 'index']);
Route::get('/daftarbarang', [DaftarbarangController::class, 'index']);



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
Route::get('/form-create-brand', [BrandController::class, 'create'])->middleware('auth');
Route::post('/create-brand', [BrandController::class, 'store'])->middleware('auth');
Route::get('/form-edit-brand-{id}', [BrandController::class, 'edit'])->middleware('auth');
Route::put('/update-brand-{id}', [BrandController::class, 'update'])->middleware('auth');
Route::delete('/delete-brand-{id}', [BrandController::class, 'destroy'])->middleware('auth');

// Gudang
Route::get('/form-create-gudang', [GudangController::class, 'create'])->middleware('auth');
Route::post('/create-gudang', [GudangController::class, 'store'])->middleware('auth');
Route::get('/form-edit-gudang-{id}', [GudangController::class, 'edit'])->middleware('auth');
Route::put('/update-gudang-{id}', [GudangController::class, 'update'])->middleware('auth');
Route::delete('/delete-gudang-{id}', [GudangController::class, 'destroy'])->middleware('auth');

// Kategori
Route::get('/form-create-kategori', [KategoriBarangController::class, 'create'])->middleware('auth');
Route::post('/create-kategori', [KategoriBarangController::class, 'store'])->middleware('auth');
Route::get('/form-edit-kategori-{id}', [KategoriBarangController::class, 'edit'])->middleware('auth');
Route::put('/update-kategori-{id}', [KategoriBarangController::class, 'update'])->middleware('auth');
Route::delete('/delete-kategori-{id}', [KategoriBarangController::class, 'destroy'])->middleware('auth');

// Hadiah
Route::get('/form-create-hadiah', [HadiahController::class, 'create'])->middleware('auth');
Route::post('/create-hadiah', [HadiahController::class, 'store'])->middleware('auth');
Route::get('/form-edit-hadiah-{id}', [HadiahController::class, 'edit'])->middleware('auth');
Route::put('/update-hadiah-{id}', [HadiahController::class, 'update'])->middleware('auth');
Route::delete('/delete-hadiah-{id}', [HadiahController::class, 'destroy'])->middleware('auth');

// Produk
Route::get('/form-create-produk', [ProdukController::class, 'create'])->middleware('auth');
Route::get('/form-create-produk-satuan', [ProdukController::class, 'satuan'])->middleware('auth');
Route::get('/form-create-produk-paket', [ProdukController::class, 'paket'])->middleware('auth');
Route::post('/create-produk', [ProdukController::class, 'store'])->middleware('auth');
Route::get('/form-edit-produk-{id}', [ProdukController::class, 'edit'])->middleware('auth');
Route::put('/update-produk-{id}', [ProdukController::class, 'update'])->middleware('auth');
Route::delete('/delete-produk-{id}', [ProdukController::class, 'destroy'])->middleware('auth');

// Role
Route::get('/form-create-role', [RoleController::class, 'create'])->middleware('auth');
Route::post('/create-role', [RoleController::class, 'store'])->middleware('auth');
Route::get('/form-edit-role-{id}', [RoleController::class, 'edit'])->middleware('auth');
Route::put('/update-role-{id}', [RoleController::class, 'update'])->middleware('auth');
Route::delete('/delete-role-{id}', [RoleController::class, 'destroy'])->middleware('auth');

// User
Route::get('/form-create-user', [UserController::class, 'create'])->middleware('auth');
Route::post('/create-user', [UserController::class, 'store'])->middleware('auth');
Route::get('/form-edit-user-{id}', [UserController::class, 'edit'])->middleware('auth');
Route::put('/update-user-{id}', [UserController::class, 'update'])->middleware('auth');
Route::delete('/delete-user-{id}', [UserController::class, 'destroy'])->middleware('auth');

// Gudang -> Lihat Stok, Riwayat Stok
Route::get('/gudang-stok-{id}', [StokController::class, 'index']);
Route::get('/HT', [HTController::class, 'index'])->middleware('auth');
Route::get('/HTadd', [HTController::class, 'create'])->middleware('auth');
Route::get('/HTdelete', [HTController::class, 'destroy'])->middleware('auth');
