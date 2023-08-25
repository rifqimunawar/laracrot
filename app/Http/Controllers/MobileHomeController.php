<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use App\Models\User;
use Inertia\Inertia;
use App\Models\Galeri;
use Illuminate\Http\Request;

class MobileHomeController extends Controller
{
 public function homepage()
 {
     // $users = User::with('rayon')->latest()->paginate(5);
     // $galeries = Galeri::with('user')->where('status', 1)->latest()->get();
 
     // // dd($galeries);
     // return Inertia::render('Homepage', [
     //     'totalMapaba' => User::whereIn('kaderisasi', ['Mapaba', 'PKD', 'PKL', 'PKN'])->count(),
     //     'totalPKD' => User::whereIn('kaderisasi', ['PKD', 'PKL', 'PKN'])->count(),
     //     'totalPKL' => User::whereIn('kaderisasi', ['PKL', 'PKN'])->count(),
     //     'totalPKN' => User::whereIn('kaderisasi', ['PKN'])->count(),
     //     'users' => $users,
     //     'galeries' => $galeries,
     // ]);
     $user_pkn = User::where('kaderisasi', 'PKN')->count(); //total pengguna yang sudah pkn
     $user_pkl = User::whereIn('kaderisasi', ['PKL', 'PKN'])->count(); //total pkl
     $user_pkd = User::whereIn('kaderisasi', ['PKD', 'PKL', 'PKN'])->count(); //total pkd
     $user_mapaba = User::whereIn('kaderisasi', ['Mapaba', 'PKD', 'PKL', 'PKN'])->count(); // Total mapaba

     $posts = Post::latest()->where('active', '1')->paginate(5);
     $galeries = Galeri::with('user')->where('status', 1)->latest()->get();
     $users = User::with('rayon')->latest()->paginate(5);

     // dd($posts);
     return view('mobile.home.index', compact('users', 'galeries', 
     'posts', 'user_pkn', 'user_pkl', 'user_pkd', 'user_mapaba'));
 }
 
 public function search(Request $request) {
  if ($request->has('search')) {
      $users = User::where('username', 'LIKE', '%' . $request->search . '%')
          ->orwhere('name', 'LIKE', '%' . $request->search . '%')
          ->orwhere('nim', 'LIKE', '%' . $request->search . '%')
          ->paginate(25);
  } else {
      $users = User::with('rayon')->latest()->paginate(25);
  }
  // dd($users);
  return view('mobile.search.index', compact( 'users'));
 }
 

 public function upload() {
  return "upload";
 }
 
}
