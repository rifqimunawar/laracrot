<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;

class MobileHomeController extends Controller
{
  public function homepage() {
   return Inertia::render('Homepage', [
    'totalMapaba' => User::whereIn('kaderisasi', ['Mapaba', 'PKD', 'PKL', 'PKN'])->count(), // Total mapaba
    'totalPKD' => User::whereIn('kaderisasi', ['PKD', 'PKL', 'PKN'])->count(),  //total pkd
    'totalPKL' => User::whereIn('kaderisasi', ['PKL', 'PKN'])->count(),  //total pkd
    'totalPKN' => User::whereIn('kaderisasi', ['PKN'])->count(),  //total pkd
   ]);
  }
}
