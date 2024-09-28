<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TentangController;

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

// Dashboard Admin Home
Route::get('/', function () {
    return view('dashboard_admin');
})->middleware('auth');

// Login Routes
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');

// Register Routes
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'store'])->name('auth.store');

// Landing Page Admin
Route::resource('landingpage', LandingpageController::class);

// Tentang (Untuk halaman dashboard)
Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/pembelian', function () {
    return view('pembelian');
});

// Tentang Admin
Route::resource('tentang_admin', TentangController::class);
Route::get('/tentang_admin/{id_tentang}/detail', [TentangController::class, 'detail'])->name('tentang_admin.detail');

// Menu Admin
Route::resource('menu', MenuController::class);
Route::get('/menu/{id_menu}/detail', [MenuController::class, 'detail'])->name('menu.detail');

// Produk Admin
Route::resource('produk', ProdukController::class);
Route::get('/produk/{id_produk}/detail', [ProdukController::class, 'detail'])->name('produk.detail');

//landing
Route::get('/produksi', [LandingpageController::class, 'produksi'])->name('produk.produksi');
Route::get('/kreasi', [LandingpageController::class, 'item'])->name('kreasi.item');

//landing
Route::get('/produksi', [LandingpageController::class, 'produksi'])->name('produk.produksi');
Route::get('/kreasi', [LandingpageController::class, 'item'])->name('kreasi.item');

// Pesan Admin
Route::resource('pesan', PesanController::class);
Route::get('/pesan/{id_pesan}/detail', [PesanController::class, 'detail'])->name('pesan.detail');

// Dashboard Landing Page
Route::get('/dashboard', [LandingpageController::class, 'showLandingPage']);
Route::get('/dashboard/detailMenu/{id}', [LandingpageController::class, 'detailMenu']);
Route::get('/dashboard/detailProduk/{id}', [LandingpageController::class, 'detailProduk']);
// Route::get('/dashboard/Produksi/detailProduk{id}', [LandingpageController::class, 'detailProduk']);

// Dashboard Admin Page (Single Route)
Route::get('/dashboard_admin', [DashboardController::class, 'index'])->name('dashboard.admin')->middleware('auth');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
