<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatistikController extends Controller
{
    public function index(Request $request)
    {
    $user_count = User::count();
    $roles = [1, 2, 3];
    $user_anggota_count = User::whereIn('role_id', $roles)->count();
    $user_kelamin_l = User::where('kelamin', 'L')->count();
    $user_kelamin_p = User::where('kelamin', 'P')->count();
    $user_rayon_1 = User::where('rayon_id', '1')->count();
    $user_rayon_2 = User::where('rayon_id', '2')->count();
    $user_rayon_3 = User::where('rayon_id', '3')->count();
    $user_rayon_4 = User::where('rayon_id', '4')->count();
    $user_rayon_5 = User::where('rayon_id', '5')->count();
    $user_rayon_6 = User::where('rayon_id', '6')->count();
    
      return view('admin.index', compact(
        'user_count', 
        'user_anggota_count',
        'user_kelamin_l', 
        'user_kelamin_p',
        'user_rayon_1',
        'user_rayon_2',
        'user_rayon_3',
        'user_rayon_4',
        'user_rayon_5',
        'user_rayon_6',
      ));
    }
}
