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

 public function viewPDF($user) {
  $user = User::find($user);
   return view('admin.user.pdf',['user'=>$user]);
 }

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
 

 // public function downloadPDF($user)
 //    {
     
 //        // Membuat objek PDF
 //        $pdf = new Dompdf(); // atau new TCPDF()
        
 //        // Mendapatkan data yang akan ditampilkan dalam PDF
 //        $data = [
 //            'title' => 'Kader PMII UNINUS',
 //            'content' => $user->name,
 //        ];
        
 //        // Membuat tampilan (view) dengan data yang diberikan
 //        $view = View::make('admin.user.pdf', $data);
        
 //        // Render tampilan ke dalam HTML
 //        $html = $view->render();
        
 //        // Memuat HTML ke dalam objek PDF
 //        $pdf->loadHtml($html);
        
 //        // Menetapkan opsi PDF jika diperlukan (misalnya ukuran kertas, orientasi, dll.)
 //        $pdf->setPaper('A4', 'portrait');
        
 //        // Render PDF
 //        $pdf->render();
        
 //        // Menghasilkan file PDF dengan nama yang unik
 //        // $filename = 'PMII UNINUS' . $user->name . '.pdf';
 //        // $pdf->stream($filename, ['Attachment' => false]);
    
 //    }
}