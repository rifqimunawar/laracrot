<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class PDFController extends Controller
{

    public function downloadPDF($user)
    {
        // Membuat objek PDF
        $pdf = new Dompdf(); // atau new TCPDF()
        
        // Mendapatkan data yang akan ditampilkan dalam PDF
        $data = [
            'title' => 'Kader PMII UNINUS',
            'content' => $user->name,
        ];
        
        // Membuat tampilan (view) dengan data yang diberikan
        $view = View::make('admin.user.pdf', $data);
        
        // Render tampilan ke dalam HTML
        $html = $view->render();
        
        // Memuat HTML ke dalam objek PDF
        $pdf->loadHtml($html);
        
        // Menetapkan opsi PDF jika diperlukan (misalnya ukuran kertas, orientasi, dll.)
        $pdf->setPaper('A4', 'portrait');
        
        // Render PDF
        $pdf->render();
        
        // Menghasilkan file PDF dengan nama yang unik
        $filename = 'PMII UNINUS' . $user->name . '.pdf';
        $pdf->stream($filename, ['Attachment' => false]);
    }
}