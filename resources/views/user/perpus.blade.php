@section('title') {{ 'Perpus' }}@endsection
@extends('/user/layout')
@section('content')
<div class="text-center my-5 pt-3">
  <h4 class="pt-5">Perpustakaan Kader</h4>
        <div class="container card info-card sales-card mt-5">
            
          <div class="my-4 col-12 col-sm-8 col-md-6">
            <form action="" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="search" placeholder="Search.....">
                    <button class="btn btn-primary">Search</button>
                </div>
            </form>
        </div>

          <div class="row" style="margin-left:0">
              @foreach ($perpus as $perp)
                  <div class="col-md-2 my-3 mx-2 shadow p-3 mb-5 bg-body-tertiary rounded" style="width:180px; height:290px; object-fit:cover; margin-right:0; position: relative;">
                        <div>
                          <img src="{{ asset('storage/img/'.$perp['image']) }}" style="width: 100%; height:200px; object-fit:cover; border-radius:20px; box-shadow: 0px 0px 5px 0px rgba(0,0,5,10);">
                      </div>
                      <div class="text-center mt-3" style="position: absolute; bottom: 10px; left: 0; right: 0;">
                        <span>{{ Str::limit($perp->judul, 15)  }}</span>
                          <a href="/perpus/details/{{ $perp->id }}" class="btn btn-outline-secondary btn-sm" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;  border-radius:10px;">Detail</a>
                          {{-- <a href="{{ asset('storage/pdf/'.$perp['pdf'])  }}" type="button" class="btn btn-outline-secondary btn-sm" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;  border-radius:10px; margin-left: 5px;">Baca</a> --}}
                      </div>
                  </div>
              @endforeach
            </div>
        </div>
    </div>
@endsection

{{-- <script>
  // mengambil id id 
  var search = document.getElementById('search');
  var tombol = document.getElementById('tombol');
  var container = document.getElementById('container');

  tombol.addEventListener('click', function () {
    alert('berhasil');
  })
</script> --}}

{{-- 
  catatan
  event even di javascript
  
  
  link buku buku

  
  https://drive.google.com/drive/folders/1szNFTWR41Y0mKuP1BdBIYS8BqRTzyNhg

  --}}