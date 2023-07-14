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
         Galery Kader
     </div>
     <div class="right">
         <a href="#" class="headerButton toggle-searchbox">
             <ion-icon name="search-outline"></ion-icon>
         </a>
     </div>
 </div>
 <!-- * App Header -->

 
    <!-- Search Component -->
    <div id="search" class="appHeader">
     <form class="search-form">
         <div class="form-group searchbox">
             <input type="text" class="form-control" placeholder="Search...">
             <i class="input-icon icon ion-ios-search"></i>
             <a href="#" class="ms-1 close toggle-searchbox"><i class="icon ion-ios-close-circle"></i></a>
         </div>
     </form>
 </div>
 <!-- * Search Component -->

     <!-- App Capsule -->
     <div id="appCapsule">

      <div class="section tab-content mt-2 mb-2">

       <div class="row">
        @foreach ($galeries as $galery)
            <div class="col-6 mb-2">
                <a href="#">
                    <div class="blog-card">
                        <img src="{{ asset('storage/img/' . $galery->img) }}" alt="image" class="imaged"
                             style="width:100%; height:150px; object-fit:cover;">
                        <div class="text">
                            <h4 class="title">{{ Str::limit($galery->judul, 30) }}</h4>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    
    <!-- Modal -->
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
          
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> --}}
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="" src="" allowfullscreen style="width: 100%; height:100%"></iframe>
                    </div>
             
        </div>
    </div>
    

          <div>
              <a href="#" class="btn btn-block btn-primary btn-lg">Load More</a>
          </div>

      </div>

  </div>
  <!-- * App Capsule -->

@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modal-video/2.5.0/modal-video.min.js"></script>
<script>
    $(document).ready(function() {
        $('.imaged').click(function() {
            var videoURL = $(this).attr('src');
            $('#myModal').modal('show');
            $('#myModal iframe').attr('src', videoURL);
            return false;
        });

        $('#myModal').on('hidden.bs.modal', function() {
            $('#myModal iframe').removeAttr('src');
        });
    });
</script>
