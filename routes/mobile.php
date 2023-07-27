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
  Route::get('/book', [MobileHomeController::class, 'book'])->name('mobileBook');
  Route::get('/bookShow/{id}', [MobileHomeController::class, 'bookShow'])->name('mobileBookShow');
  Route::get('/galery', [MobileHomeController::class, 'galery'])->name('mobileGalery');
  Route::get('/calender', [MobileHomeController::class, 'calender'])->name('mobileCalender');
  Route::get('/post', [MobileHomeController::class, 'post'])->name('mobilePost');
  Route::get('/post/details/{slug}', [MobileHomeController::class, 'show'])->name('mobilePostShow');
  Route::get('/post/nuOnline/details/{slug}', [MobileHomeController::class, 'nuShow'])->name('nuShow');
  Route::get('/kader/profile/{slug}', [MobileHomeController::class, 'KaderProfile'])->name('KaderProfile')->middleware(['auth']);
 });

 Route::middleware(['auth', 'role:1, 2, 3'])->group(function () {
  Route::get('mobile/uploads', [MobileHomeController::class, 'mobileUpload'])->name('mobileUpload')->middleware(['auth']);
  Route::get('mobile/profile', [MobileHomeController::class, 'profile'])->name('profile')->middleware(['auth']);
});