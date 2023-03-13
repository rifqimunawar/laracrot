<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KaderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PerpusController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/singgle', function () {
    return view('user.blog.singgle');
});
// =====================================================
// Route Frondend  =====================================
// ----------------------------------------------------
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/blog', [BlogController::class, 'index'])->name('index');
Route::get('/crot', [BlogController::class, 'crot'])->name('crot');
Route::get('/galeri', [GaleriController::class, 'index'])->name('index');
Route::get('/perpus', [PerpusController::class, 'index'])->name('index');
// =====================================================
// Route Auth  =========================================
// ----------------------------------------------------
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::middleware(['auth', 'second'])->group(function () {
Route::get('/admin', [KaderController::class, 'statistik'])->name('statistik');
    
});
// =====================================================
// Route Home  =========================================
// ----------------------------------------------------
Route::get('/admin/page', [HomeController::class, 'admin_page'])->name('admin_page');
Route::get('/admin/page/{id}/edit', [HomeController::class, 'edit'])->name('edit');
Route::put('/admin/page/{id}', [HomeController::class, 'update'])->name('update');
// =====================================================
// Route Admin Kader ==============================
// ----------------------------------------------------
Route::get('/admin/kader', [KaderController::class, 'kader'])->name('kader');
Route::get('/admin/kader/create', [KaderController::class, 'create'])->name('create');
Route::post('/admin/kader/store', [KaderController::class, 'store'])->name('store');
Route::get('/admin/kader/{id}/edit', [KaderController::class, 'edit'])->name('edit');
Route::put('/admin/kader/{id}', [KaderController::class, 'update'])->name('update');
Route::delete('/admin/kader/{id}', [KaderController::class, 'destroy'])->name('kader.destroy');
Route::get('/admin/kader/{id}/view', [KaderController::class, 'view'])->name('view');

// ===============================================================================
// ======================================  Route fitur blog ====================== 

// ===============================================================================
// ======================================  Route Galeri  =========================
Route::get('/admin/galeri', [GaleriController::class, 'admin_index'])->name('admin_index');
Route::get('/admin/galeri/create', [GaleriController::class, 'admin_create'])->name('admin_create');
Route::post('/admin/galeri/store', [GaleriController::class, 'admin_store'])->name('admin_store');
Route::delete('/admin/galeri/{id}', [GaleriController::class, 'admin_destroy'])->name('admin_destroy');
// ===============================================================================
// ======================================  Route Profile  =========================
// Route::get('/profile', [ProfileController::class, 'index'])->name('index');
// ===============================================================================
// ======================================  Route Perpustakaan  ====================
Route::get('/perpus/baca', [PerpusController::class, 'baca'])->name('baca');
Route::get('/admin/perpus', [PerpusController::class, 'admin_index'])->name('admin_index');
Route::get('admin/perpus/create', [PerpusController::class, 'create'])->name('create');
Route::delete('/admin/perpus/{id}', [PerpusController::class, 'admin_destroy'])->name('admin_destroy');
