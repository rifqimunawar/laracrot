
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center align-items-center">
        <div class="col-xl-11 d-flex align-items-center justify-content-between">
          <h1 class="logo"><a href="#">PMII UNINUS</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav id="navbar" class="navbar">
            <ul>
              @auth 
                @if (auth()->user()-> role == "superadmin"){
                    <li><a class="nav-link scrollto " href="/admin">Admin</a></li>
                  }
                  @endif
                @endauth
              <li><a class="nav-link scrollto {{ '/' ==request()->path()? 'active' :''}}" href="/">Home</a></li>

              <li><a class="nav-link scrollto " href="#about">About</a></li>
              <li><a class="nav-link scrollto {{ 'galeri' ==request()->path()? 'active' :''}}" href="/galeri">Galeri</a></li>

              @auth
                <li><a class="nav-link scrollto {{ 'perpus' ==request()->path()? 'active' :''}}" href="/perpus">Perpustakaan</a></li>
              @endauth
              <li><a class="nav-link scrollto" href="#team">Team</a></li>
              <li><a class="nav-link scrollto {{ 'blog' == request()->path()? 'active' : '' }}" href="/blog">Blog</a></li>
              <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

              <li class="pl-3">
                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ms-auto">
                  <!-- Authentication Links -->
                  @guest
                      @if (Route::has('login'))
                          <li class="nav-item">
                              <a class="nav-link scrollto {{ 'profile' ==request()->path()? 'active' :''}}" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                      @endif

                      @if (Route::has('register'))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                          </li>
                      @endif
                  @else
                  <li class="nav-item dropdown pe-3">

                  <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    
                    <span class="d-none d-md-block dropdown-toggle ps-2">{{ $user->username }}</span>
                  </a><!-- End Profile Iamge Icon -->
        
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                      <img src="/assets/img/profile-img.jpg" style="width: 40px; heigt:40px; " alt="Profile" class="rounded-circle">
                      <h6>{{ $user->username }}</h6>
                      <span>Web Designer</span>
                    </li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
        
                    <li>
                      <a class="dropdown-item d-flex align-items-center" href="/profile">
                        <i class="bi bi-person"></i>
                        <span>My Profile</span>
                      </a>
                    </li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
        
                    <li>
                      <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                        <i class="bi bi-gear"></i>
                        <span>Account Settings</span>
                      </a>
                    </li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
        
                    <li>
                      <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                        <i class="bi bi-question-circle"></i>
                        <span>Need Help?</span>
                      </a>
                    </li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
        
                    <li>
                      <a class="dropdown-item d-flex align-items-center" href="/logout">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Logout</span>
                      </a>
                    </li>
        
                  </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->
                  @endguest
                </li>
                {{-- <li><a href="/logout">logout</a></li> --}}
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->
