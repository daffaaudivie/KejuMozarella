<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landingpageController;

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
// Route::get('/dashboard', [LandingpageController::class, 'index']);

// web.php (routes file)
Route::get('/dashboard', [LandingpageController::class, 'showLandingPage']);
Route::get('/dashboard', [LandingpageController::class, 'showLandingPage']);
Route::get('/dashboard_admin', [LandingpageController::class, 'dashboard_admin']);


// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('/dashboard_admin', function () {
    return view('dashboard_admin');
});

Route::get('/dashboard4', function () {
    return asset('storage/menu/menu1.jpg');
});
