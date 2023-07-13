<?php

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\MobileHomeController;

/*
|--------------------------------------------------------------------------
| Mobile Routes To Controller Mobile
|--------------------------------------------------------------------------
|
|
*/

// Route::get('/welcome', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::prefix('mobile')->group(function () {
  Route::get('/', [MobileHomeController::class, 'homepage'])->name('homepage');
  Route::get('/search', [MobileHomeController::class, 'search'])->name('search');
  Route::get('/upload', [MobileHomeController::class, 'upload'])->name('upload')->middleware();
 });

 Route::middleware(['auth', 'role:1, 2, 3'])->group(function () {
  Route::get('mobile/uploads', [MobileHomeController::class, 'uploads'])->middleware(['auth']);
});