<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\DashboardController;

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

// Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');

// Register
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'store'])->name('auth.store');

// LandingPageAdmin
Route::get('/landingpage', [LandingpageController::class, 'index']);
Route::get('/landingpage/create', [LandingpageController::class, 'create'])->name('landingpage.create');
Route::get('/landingpage/edit/{id}', [LandingpageController::class, 'edit'])->name('alternatif.edit');
Route::resource('landingpage', LandingpageController::class);
<<<<<<< HEAD
=======
Route::get('/tentang', function () {return view('tentang'); // Langsung mengembalikan view
});
>>>>>>> 1f3f53d9e11912e46f08996c937cb68ec1bcad4f

// MenuAdmin
Route::get('/menu', [MenuController::class, 'index']);
Route::get('/menu/create', [MenuController::class, 'create'])->name('menu.create');
Route::get('/menu/edit/{id}', [MenuController::class, 'edit'])->name('menu.edit');
Route::resource('menu', MenuController::class);
Route::get('/menu/{id_menu}/detail', [MenuController::class, 'detail'])->name('menu.detail');

// ProdukPageAdmin
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create');
Route::get('/produk/edit/{id}', [ProdukController::class, 'edit'])->name('produk.edit');
Route::resource('produk', ProdukController::class);
Route::get('/produk/{id_produk}/detail', [ProdukController::class, 'detail'])->name('produk.detail');

// PesanPageAdmin
Route::get('/pesan', [PesanController::class, 'index']);
Route::get('/pesan/create', [PesanController::class, 'create'])->name('pesan.create');
Route::get('/pesan/edit/{id}', [PesanController::class, 'edit'])->name('pesan.edit');
Route::resource('pesan', PesanController::class);

// Dashboard Landing Page
Route::get('/dashboard', [LandingpageController::class, 'showLandingPage']);
<<<<<<< HEAD
=======
Route::get('/dashboard/detailMenu/{id}', [LandingpageController::class, 'detailMenu']);
Route::get('/dashboard_admin', [LandingpageController::class, 'dashboard_admin']);
>>>>>>> 1f3f53d9e11912e46f08996c937cb68ec1bcad4f

// Dashboard Admin Page
Route::get('/dashboard-admin', [DashboardController::class, 'index'])->name('dashboard.admin');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

// Fallback Dashboard Admin View
Route::get('/dashboard_admin', function () {
    return view('dashboard_admin');
});
