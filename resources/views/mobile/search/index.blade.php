@section('title') {{ 'Search' }}@endsection
    @extends('mobile.layout')
@section('content')


    <!-- App Header -->
    <div class="appHeader">
        <div class="left">
            <a href="{{ route('homepage') }}" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">Search</div>
        <div class="right">
            {{-- <a href="#" class="headerButton toggle-searchbox">
                <ion-icon name="search-outline"></ion-icon>
            </a> --}}
        </div>
    </div>
    <!-- * App Header -->

    <!-- Extra Header -->
    <div class="extraHeader">
        <form class="search-form" action="" method="get">
            <div class="form-group searchbox">
                <input type="text" class="form-control" name="search" >
                <i class="input-icon">
                    <ion-icon name="search-outline"></ion-icon>
                </i>
                <button  class="btn border-t-neutral-100">
                 <ion-icon name="search-outline" class=" ml-2">></ion-icon>
                </button>
            </div>
        </form>
    </div>
    <!-- * Extra Header -->

    <!-- App Capsule -->
    <div id="appCapsule" class="extra-header-active full-height">


        <div class="section mt-1 mb-2">
            {{-- <div class="section-title">Found 43 results for "<span class="text-primary">Deposit</span>"</div> --}}
            <div class="card">
                <ul class="listview image-listview media transparent flush">
                    @foreach ($users as $user)

                    <li>
                        <a href="#" class="item">
                            <div class="imageWrapper">
                                <img src="{{ asset('storage/img/' . $user->img) }}" alt="img"
                                    class="image-block imaged w48"
                                    style="width:48px; height:48px; object-fit:cover; border-radius:50%">
                            </div>
                            <div class="in">
                                <div>
                                    <strong>{{ $user->name }}</strong>
                                    <p>{{ $user->rayon->rayon }}</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="section mb-2">
            {{-- <a href="#" class="back-to-top btn btn-block btn-secondary">Search</a> --}}
        </div>




    </div>
    <!-- * App Capsule -->
