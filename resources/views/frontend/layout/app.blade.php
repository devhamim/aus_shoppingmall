<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Page Title -->
	@if ($setting->first()->title != null)
        <title>{{ $setting->first()->title }}</title>
    @endif
    <!-- favicon icon -->
    @if ($setting->first()->favicon != null)
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('uploads/setting') }}/{{ $setting->first()->favicon }}">
    @endif
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/plugins/magnific-popup/magnific-popup.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/demos/demo-15.css">
</head>

<body>
    <div class="page-wrapper">


        <!--header start-->
    @include('frontend.layout.header')

    @yield('content')

    <!--footer start-->
    @include('frontend.layout.footer')
    <!-- footer end-->


    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container mobile-menu-light">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>

            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li>
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about_us') }}">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('gallerys') }}">Project</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contect') }}">Contact</a></li>
                </ul>
            </nav><!-- End .mobile-nav -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <!-- Plugins JS File -->
    <script src="{{ asset('frontend') }}/js/jquery.min.js"></script>
    <script src="{{ asset('frontend') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.hoverIntent.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.waypoints.min.js"></script>
    <script src="{{ asset('frontend') }}/js/superfish.min.js"></script>
    <script src="{{ asset('frontend') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('frontend') }}/js/bootstrap-input-spinner.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.magnific-popup.min.js"></script>
    <!-- Main JS File -->
    <script src="{{ asset('frontend') }}/js/main.js"></script>
    <script src="{{ asset('frontend') }}/js/demos/demo-15.js"></script>
</body>
</html>
