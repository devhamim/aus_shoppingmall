<header class="header header-5" style="background: #333">
    <div class="header-middle sticky-header">
        <div class="container-fluid">
            <div class="header-left">
                <button class="mobile-menu-toggler">
                    <span class="sr-only">Toggle mobile menu</span>
                    <i class="icon-bars"></i>
                </button>

                <a href="{{ url('/') }}" class="logo">
                    @if ($setting->first()->logo != null)
                        <img  src="{{ asset('uploads/setting') }}/{{ $setting->first()->logo }}" alt="logo-img" width="105" height="25">
                    @endif
                </a>

                <nav class="main-nav" >
                    <ul class="menu sf-arrows">
                        <li>
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('about_us') }}">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('our.blog') }}">Event</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('our.clients') }}">Hours and Location</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('contect') }}">Contact</a></li>
                    </ul><!-- End .menu -->
                </nav><!-- End .main-nav -->
            </div><!-- End .header-left -->
        </div><!-- End .container-fluid -->
    </div><!-- End .header-middle -->
</header><!-- End .header -->
