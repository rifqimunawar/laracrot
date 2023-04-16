<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KaderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RayonController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PerpusController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Blog\TagController;
use App\Http\Controllers\Blog\PostController;
use App\Http\Controllers\Blog\SearchController;
use App\Http\Controllers\Blog\CategoryController;
use App\Http\Controllers\Admin\Blog\TagController as admintagcontroller;
use App\Http\Controllers\Admin\Blog\PostController as adminpostcontroller;
use App\Http\Controllers\Admin\Blog\CategoryController as admincategorycontroller;

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

// Route::get('/singgle', function () {
//     return view('user.Post.singgle');
// });
// =====================================================
// Route Frondend  =====================================
// ----------------------------------------------------
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/post', [PostController::class, 'index'])->name('index');
Route::get('/galeri', [GaleriController::class, 'index'])->name('index');
Route::get('/article/{slug}', [PostController::class, 'show'])->name('post');
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category');
Route::get('/tag/{slug}', [TagController::class, 'show'])->name('tag');
Route::get('/search', [SearchController::class,'index'])->name('search');
Route::get('/admin/rayon/{slug}', [RayonController::class, 'show'])->name('rayon');
// =====================================================
// Route Auth  =========================================
// ----------------------------------------------------
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register/store', [LoginController::class, 'store'])->name('store');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// =====================================================
// Route Auth User ====================================
// -----------------------------------------------------
    Route::get('/perpus', [PerpusController::class, 'index'])->name('index')->middleware('auth');
    Route::get('/profile', [ProfileController::class, 'index'])->middleware(['auth']);
    Route::post('/profile/galeri/store', [ProfileController::class, 'store'])->name('store');
    Route::post('/profile/post/storepost', [ProfileController::class, 'storepost'])->name('storepost');
    Route::post('/profile/perpus/storeperpus', [ProfileController::class, 'storeperpus'])->name('storeperpus');
    // Route::get('/profile', [ProfileController::class, 'index'])->middleware(['auth', 'role:user, admin, superadmin']);

// =====================================================
// Route Admin =========================================
// -----------------------------------------------------
Route::middleware(['auth', 'role:1, 2'])->group(function () {

});

// =====================================================
// Route Auth Superadmin ===============================
// ----------------------------------------------------
Route::middleware(['auth', 'role_id:1'])->group(function () {
    Route::get('/admin', [KaderController::class, 'statistik'])->name('statistik');
    Route::get('/admin/perpus', [PerpusController::class, 'admin_index'])->name('admin_index');
    Route::get('admin/perpus/create', [PerpusController::class, 'create'])->name('create');
    Route::post('/admin/perpus/store', [PerpusController::class, 'store'])->name('store');
    Route::delete('/admin/perpus/{id}', [PerpusController::class, 'destroy'])->name('perpus.destroy');

    Route::get('/admin/galeri', [GaleriController::class, 'admin_index'])->name('admin_index');
    Route::get('/admin/galeri/create', [GaleriController::class, 'admin_create'])->name('admin_create');
    Route::post('/admin/galeri/store', [GaleriController::class, 'store'])->name('store');
    Route::delete('/admin/galeri/{id}', [GaleriController::class, 'admin_destroy'])->name('admin_destroy');

    Route::get('/admin/kader', [KaderController::class, 'kader'])->name('kader');
    Route::get('/admin/kader/create', [KaderController::class, 'create'])->name('create');
    Route::post('/admin/kader/store', [KaderController::class, 'store'])->name('store');
    Route::get('/admin/kader/{id}/edit', [KaderController::class, 'edit'])->name('edit');
    Route::put('/admin/kader/{id}', [KaderController::class, 'update'])->name('update');
    Route::delete('/admin/kader/{id}', [KaderController::class, 'destroy'])->name('kader.destroy');
    Route::get('/admin/kader/{id}/view', [KaderController::class, 'view'])->name('view');

    Route::get('/admin/page', [HomeController::class, 'admin_page'])->name('admin_page');
    Route::get('/admin/page/{id}/edit', [HomeController::class, 'edit'])->name('edit');
    Route::put('/admin/page/{id}', [HomeController::class, 'update'])->name('update');

    Route::get('/admin/post/category', [admincategorycontroller::class, 'index'])->name('categories.index');
    Route::get('/admin/post/category/create', [admincategorycontroller::class, 'create'])->name('categories.create');
    Route::post('/admin/post/category/store', [admincategorycontroller::class, 'store'])->name('categories.store');
    Route::get('/admin/post/category/{id}/edit', [admincategorycontroller::class, 'edit'])->name('categories.edit');
    Route::put('/admin/post/category/{id}', [admincategorycontroller::class, 'update'])->name('categories.update');
    Route::delete('/admin/post/category/{id}', [admincategorycontroller::class, 'destroy'])->name('categories.destroy');

    Route::get('/admin/post/tag', [admintagcontroller::class, 'index'])->name('tags.index');
    Route::get('/admin/post/tag/create', [admintagcontroller::class, 'create'])->name('create');
    Route::post('/admin/post/tag/store', [admintagcontroller::class, 'store'])->name('store');
    Route::get('/admin/post/tag/{id}/edit', [admintagcontroller::class, 'edit'])->name('tags.edit');
    Route::put('/admin/post/tag/{id}', [admintagcontroller::class, 'update'])->name('tags.update');
    Route::delete('/admin/post/tag/{id}', [admintagcontroller::class, 'destroy'])->name('tags.destroy');

    Route::get('/admin/post', [adminpostcontroller::class, 'index'])->name('posts.index');
    Route::get('/admin/post/create', [adminpostcontroller::class, 'create'])->name('posts.create');
    Route::post('/admin/post/store', [adminpostcontroller::class, 'store'])->name('posts.store');
    Route::get('/admin/post/{id}/edit', [adminpostcontroller::class, 'edit'])->name('posts.edit');
    Route::put('/admin/post/{id}', [adminpostcontroller::class, 'update'])->name('posts.update');
    Route::delete('/admin/post/{id}', [adminpostcontroller::class, 'destroy'])->name('posts.destroy');

    Route::get('/admin/rayon', [RayonController::class, 'index'])->name('rayon.index');
    Route::get('/admin/rayon/create', [RayonController::class, 'create'])->name('create');
    Route::post('/admin/rayon/store', [RayonController::class, 'store'])->name('store');
    Route::get('/admin/rayon/{id}/edit', [RayonController::class, 'edit'])->name('rayon.edit');
    Route::put('/admin/rayon/{id}', [RayonController::class, 'update'])->name('rayon.update');
    Route::delete('/admin/rayon/{id}', [RayonController::class, 'destroy'])->name('rayon.destroy');

    Route::get('/admin/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/admin/user/create', [UserController::class, 'create'])->name('create');
    Route::post('/admin/user/store', [UserController::class, 'store'])->name('store');
    Route::get('/admin/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/admin/user/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/admin/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');

});