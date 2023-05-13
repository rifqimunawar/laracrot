
<div class="col-lg-4">
            
    <!-- Popular News Start -->
    <div class="mb-3">
        <div class="section-title mb-0">
            <h4 class="m-0 text-uppercase font-weight-bold">Populer News</h4>
        </div>
        <div class="bg-white border border-top-0 p-3">


            @foreach ($trending->take(3) as $pos)
            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                @if ($pos->image)
                <img class="img-fluid" src="{{ asset('storage/img/' . $pos->image) }}" alt=""style="height:100px; width:200px; overflow:hidden; object-fit: cover;">
                @endif
                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                    <div class="">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="{{ route('category', $pos->category->slug) }}">{{ $pos->category->title }}</a>
                        <p class="text-body" style="padding: 0px; margin: 0px" href="" ><small>{{ $pos->views }} Kali Dilihat</small></p>
                    </div>
                    <a class="h6 m-0 text-secondary font-weight-bold" href="{{ route('post', ['slug' => $pos->slug]) }}">{{ Str::limit ($pos->title, 30) }}</a>
                </div>
            </div>
            @endforeach
    <!-- Popular News End -->

    <!-- Categori Start -->
    <div class="mb-3">
        <div class="section-title mb-0">
            <h4 class="m-0 text-uppercase font-weight-bold">Categori</h4>
        </div>
        <div class="bg-white border border-top-0 p-3">
            <div class="d-flex flex-wrap m-n1">
                @foreach ($post_categories as $categories)
                    <a href="{{ route('category', $categories->slug) }}"class="btn btn-sm text-uppercase btn-outline-secondary m-1">{{ $categories->title }}</a>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Categori End -->

    <!-- Tags Start -->
    <div class="mb-3">
        <div class="section-title mb-0">
            <h4 class="m-0 text-uppercase font-weight-bold">Tags</h4>
        </div>
        <div class="bg-white border border-top-0 p-3">
            <div class="d-flex flex-wrap m-n1">
                @foreach ($tags as $tag)
                    <a href="{{ route('tag', $tag->slug) }}"class="btn btn-sm btn-outline-secondary m-1">{{ $tag->title }}</a>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Tags End -->

    
    <!-- Social Follow Start -->
      {{-- <div class="mb-3">
      <div class="section-title mb-0">
          <h4 class="m-0 text-uppercase font-weight-bold">Follow Us</h4>
      </div>
      <div class="bg-white border border-top-0 p-3">
          <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #39569E;">
              <i class="fab fa-facebook-f text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
              <span class="font-weight-medium">12,345 Fans</span>
          </a>
          <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #52AAF4;">
              <i class="fab fa-twitter text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
              <span class="font-weight-medium">12,345 Followers</span>
          </a>
          <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #0185AE;">
              <i class="fab fa-linkedin-in text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
              <span class="font-weight-medium">12,345 Connects</span>
          </a>
          <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #C8359D;">
              <i class="fab fa-instagram text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
              <span class="font-weight-medium">12,345 Followers</span>
          </a>
          <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #DC472E;">
              <i class="fab fa-youtube text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
              <span class="font-weight-medium">12,345 Subscribers</span>
          </a>
          <a href="" class="d-block w-100 text-white text-decoration-none" style="background: #055570;">
              <i class="fab fa-vimeo-v text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
              <span class="font-weight-medium">12,345 Followers</span>
          </a>
      </div>
  </div> --}}
  <!-- Social Follow End -->


</div>
</div>
</div>
</div>
<!-- News With Sidebar End -->