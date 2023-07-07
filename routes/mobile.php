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
  Route::get('/', [MobileHomeController::class, 'home'])->name('home');

 });
 
 
 Route::get('/mobile/homepage', function () {
   return Inertia::render('Homepage');
});