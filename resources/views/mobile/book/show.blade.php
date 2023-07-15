@section('title') {{ 'Search' }}@endsection
    @extends('mobile.layout')
@section('content')

    <!-- App Header -->
    <div class="appHeader">
     <div class="left">
         <a href="#" class="headerButton goBack">
             <ion-icon name="chevron-back-outline"></ion-icon>
         </a>
     </div>
     <div class="pageTitle">
         Perpustakaan
     </div>
     <div class="right">
         <a href="#" class="headerButton toggle-searchbox">
             <ion-icon name="search-outline"></ion-icon>
         </a>
     </div>
 </div>
 <!-- * App Header -->


     <!-- App Capsule -->
     <div id="appCapsule" class="extra-header-active full-height">


      <div class="section mt-1 mb-2">
          {{-- <div class="section-title">Found 43 results for "<span class="text-primary">Deposit</span>"</div> --}}
          <div class="card" style="background: transparent">
              <img src="{{ asset('storage/img/' . $books->image) }}" alt="" 
              style="width: 100%; height: 500px; border-radius: 50px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">
          </div>
          <div class="text-center m-4">
            <a href="{{ route('mobileBook') }}" class="btn btn-primary ">Kembali</a>
            <a href="{{ asset('storage/pdf/'.$books->pdf) }}" download type="button" class="btn btn-primary " >Download</a>
          </div>
          <div class="text-center m-4">
           <table style="width: 100%;
           border-collapse: collapse;">

            <tr>
              <th style=" padding: 10px;text-align: left;
              border-bottom: 1px solid #ddd;">
              Judul
             </th>
              <td style=" padding: 10px;text-align: left;
              border-bottom: 1px solid #ddd;">
              : {{ $books->judul }}
             </td>
            </tr>

            <tr>
              <th style=" padding: 10px;text-align: left;
              border-bottom: 1px solid #ddd;">
              Penulis
             </th>
              <td style=" padding: 10px;text-align: left;
              border-bottom: 1px solid #ddd;">
              : {{ $books->penulis }}
             </td>
            </tr>

            <tr>
              <th style=" padding: 10px;text-align: left;
              border-bottom: 1px solid #ddd;">
              Penerbit
             </th>
              <td style=" padding: 10px;text-align: left;
              border-bottom: 1px solid #ddd;">
              : {{ $books->penerbit }}
             </td>
            </tr>

            <tr>
              <th style=" padding: 10px;text-align: left;
              border-bottom: 1px solid #ddd;">
              Thn Terbit
             </th>
              <td style=" padding: 10px;text-align: left;
              border-bottom: 1px solid #ddd;">
              : {{ $books->thn_terbit }}
             </td>
            </tr>

            <tr>
              <th style=" padding: 10px;text-align: left;
              border-bottom: 1px solid #ddd;">
              No ISBN
             </th>
              <td style=" padding: 10px;text-align: left;
              border-bottom: 1px solid #ddd;">
              : {{ $books->isbn }}
             </td>
            </tr>

            <tr>
              <th style=" padding: 10px;text-align: left;
              border-bottom: 1px solid #ddd;">
              Bahasa
             </th>
              <td style=" padding: 10px;text-align: left;
              border-bottom: 1px solid #ddd;">
              : {{ $books->bahasa }}
             </td>
            </tr>

            <tr>
              <th style=" padding: 10px;text-align: left;
              border-bottom: 1px solid #ddd;">
              Jmlh Hal
             </th>
              <td style=" padding: 10px;text-align: left;
              border-bottom: 1px solid #ddd;">
              : {{ $books->halaman }}
             </td>
            </tr>

            {{-- <tr>
              <th style=" padding: 10px;text-align: left;
              border-bottom: 1px solid #ddd;">
              Category
             </th>
              <td style=" padding: 10px;text-align: left;
              border-bottom: 1px solid #ddd;">
              : {{ $books->categorybook_id }}
             </td>
            </tr> --}}

          </table>
          
         </div>
      </div>

      <div class="section mb-2">
          {{-- <a href="#" class="back-to-top btn btn-block btn-secondary">Search</a> --}}
      </div>




  </div>
  <!-- * App Capsule -->


 @endsection