<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landingpageController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\pesanController;


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

Route::get('/', function () {
    return view('dashboard_admin');
})->middleware('auth');



// Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');

// Register
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'store'])->name('auth.store');

//LandingPageAdmin
Route::get('/landingpage',[landingpageController::class,"index"]);
Route::get('/landingpage/create', [landingpageController::class, 'create'])->name('landingpage.create');
Route::get('/landingpage/edit/{id}', [landingpageController::class, 'edit'])->name('alternatif.edit');
Route::resource('landingpage', LandingpageController::class);
Route::get('/tentang', function () {return view('tentang'); // Langsung mengembalikan view
});

//MenuAdmin
Route::get('/menu',[menuController::class,"index"]);
Route::get('/menu/create', [menuController::class, 'create'])->name('menu.create');
Route::get('/menu/edit/{id}', [menuController::class, 'edit'])->name('menu.edit');
Route::resource('menu', menuController::class); 

//ProdukPageAdmin
Route::get('/produk',[produkController::class,"index"]);
Route::get('/produk/create', [produkController::class, 'create'])->name('produk.create');
Route::get('/produk/edit/{id}', [produkController::class, 'edit'])->name('produk.edit');
Route::resource('produk', produkController::class); 

//PesanPageAdmin
Route::get('/pesan',[pesanController::class,"index"]);
Route::get('/pesan/create', [pesanController::class, 'create'])->name('pesan.create');
Route::get('/pesan/edit/{id}', [pesanController::class, 'edit'])->name('pesan.edit');
Route::resource('pesan', pesanController::class); 

// web.php (routes file)
Route::get('/dashboard', [LandingpageController::class, 'showLandingPage']);
Route::get('/dashboard/detailMenu/{id}', [LandingpageController::class, 'detailMenu']);
Route::get('/dashboard_admin', [LandingpageController::class, 'dashboard_admin']);


// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('/dashboard_admin', function () {
    return view('dashboard_admin');
});
