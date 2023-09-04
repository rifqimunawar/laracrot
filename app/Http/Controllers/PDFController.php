<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Rayon;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\View;

class PDFController extends Controller
{

 public function rayonPDF($slug, Request $request)
 {
     // Ambil data rayon berdasarkan slug
     $rayon = Rayon::where('slug', $slug)
         ->with('users')
         ->latest()
         ->first(); // Menggunakan first() untuk mendapatkan satu data rayon
 
     if (!$rayon) {
         // Handle jika rayon tidak ditemukan
         abort(404); // Atau tampilkan pesan error yang sesuai
     }
 
     // Hitung jumlah pengguna dalam rayon tersebut
     $count_user = $rayon->users->count();
 
     // Format tanggal sesuai dengan yang Anda inginkan
     $now = Carbon::now()->format('Y-m-d');
 
     return view('admin.rayon.rayon-pdf', compact('rayon', 'count_user', 'now'));
 }


 public function kaderPDF($id, Request $request) {
  $users = User::findOrFail($id);
  $now = Carbon::now()->format('Y-m-d');

  return view('admin.user.pdf', compact('users', 'now'));
 }
}