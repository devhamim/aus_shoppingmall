@extends('frontend.layout.app')

@section('content')

<main class="main">
    <div class="page-header page-header-big text-center" style="background-image: url('{{ asset('frontend') }}/images/about-header-bg.jpg')">
        <h1 class="page-title text-white">About us<span class="text-white">Who we are</span></h1>
    </div><!-- End .page-header -->

    <div class="page-content pb-0">
        {{-- <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-3 mb-lg-0">
                    <h2 class="title">Our Vision</h2><!-- End .title -->
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. </p>
                </div><!-- End .col-lg-6 -->

                <div class="col-lg-6">
                    <h2 class="title">Our Mission</h2><!-- End .title -->
                    <p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. <br>Praesent elementum hendrerit tortor. Sed semper lorem at felis. </p>
                </div><!-- End .col-lg-6 -->
            </div><!-- End .row -->

            <div class="mb-5"></div><!-- End .mb-4 -->
        </div><!-- End .container --> --}}

        <div class="bg-light-2 pt-6 pb-5 mb-6 mb-lg-8">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mb-3 mb-lg-0">
                        <p class="lead">The Guest Services team is dedicated to enhancing your experience and making each visit as enjoyable and stress-free as possible. Our team is here to provide exceptional assistance and support for all your needs, big or small. Whether you’re looking for directions to a specific store, need assistance with purchasing a gift card, or simply want recommendations for a special gift or shopping advice, we’re ready and eager to help.</p>
                        <p class="lead">At Guest Services, we understand that every interaction matters. We are passionate about making your experience memorable by offering prompt, friendly, and knowledgeable assistance. Our team strives to ensure that you feel welcomed, valued, and supported throughout your visit.</p>
                        <p class="lead">From the moment you walk through the doors, we invite you to connect with us for any questions or support. We are committed to going the extra mile to meet your needs and exceed your expectations. Let us make your day a little brighter, and we look forward to assisting you in any way we can today.</p>
                    </div><!-- End .col-lg-5 -->

                    <div class="col-lg-6 offset-lg-1">
                        <div>
                            <img src="{{ asset('frontend') }}/images/about/img-1.jpg" alt="" class="about-img-front">

                        </div><!-- End .about-images -->
                    </div><!-- End .col-lg-6 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="brands-text">
                        <h2 class="title">The world's premium design brands in one destination.</h2><!-- End .title -->
                        <p>Explore a curated collection of the world’s finest design brands all in one place. From luxury furniture to fashion, find premium products crafted with quality, style, and elegance for an inspiring shopping experience.</p>
                    </div><!-- End .brands-text -->
                </div><!-- End .col-lg-5 -->
                <div class="col-lg-7">
                    <div class="brands-display">
                        <div class="row justify-content-center">
                            <div class="col-6 col-sm-4">
                                <a href="#" class="brand">
                                    <img src="{{ asset('frontend') }}/images/brands/1.png" alt="Brand Name">
                                </a>
                            </div><!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <a href="#" class="brand">
                                    <img src="{{ asset('frontend') }}/images/brands/2.png" alt="Brand Name">
                                </a>
                            </div><!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <a href="#" class="brand">
                                    <img src="{{ asset('frontend') }}/images/brands/3.png" alt="Brand Name">
                                </a>
                            </div><!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <a href="#" class="brand">
                                    <img src="{{ asset('frontend') }}/images/brands/4.png" alt="Brand Name">
                                </a>
                            </div><!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <a href="#" class="brand">
                                    <img src="{{ asset('frontend') }}/images/brands/5.png" alt="Brand Name">
                                </a>
                            </div><!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <a href="#" class="brand">
                                    <img src="{{ asset('frontend') }}/images/brands/6.png" alt="Brand Name">
                                </a>
                            </div><!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <a href="#" class="brand">
                                    <img src="{{ asset('frontend') }}/images/brands/7.png" alt="Brand Name">
                                </a>
                            </div><!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <a href="#" class="brand">
                                    <img src="{{ asset('frontend') }}/images/brands/8.png" alt="Brand Name">
                                </a>
                            </div><!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <a href="#" class="brand">
                                    <img src="{{ asset('frontend') }}/images/brands/9.png" alt="Brand Name">
                                </a>
                            </div><!-- End .col-sm-4 -->
                        </div><!-- End .row -->
                    </div><!-- End .brands-display -->
                </div><!-- End .col-lg-7 -->
            </div><!-- End .row -->

            <hr class="mt-4 mb-6">

            {{-- <h2 class="title text-center mb-4">Meet Our Team</h2><!-- End .title text-center mb-2 -->

            <div class="row">
                <div class="col-md-4">
                    <div class="member member-anim text-center">
                        <figure class="member-media">
                            <img src="{{ asset('frontend') }}/images/team/member-1.jpg" alt="member photo">

                            <figcaption class="member-overlay">
                                <div class="member-overlay-content">
                                    <h3 class="member-title">Samanta Grey<span>Founder & CEO</span></h3><!-- End .member-title -->
                                    <p>Sed pretium, ligula sollicitudin viverra, tortor libero sodales leo, eget blandit nunc.</p>
                                    <div class="social-icons social-icons-simple">
                                        <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                        <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                        <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                    </div><!-- End .soial-icons -->
                                </div><!-- End .member-overlay-content -->
                            </figcaption><!-- End .member-overlay -->
                        </figure><!-- End .member-media -->
                        <div class="member-content">
                            <h3 class="member-title">Samanta Grey<span>Founder & CEO</span></h3><!-- End .member-title -->
                        </div><!-- End .member-content -->
                    </div><!-- End .member -->
                </div><!-- End .col-md-4 -->

                <div class="col-md-4">
                    <div class="member member-anim text-center">
                        <figure class="member-media">
                            <img src="{{ asset('frontend') }}/images/team/member-2.jpg" alt="member photo">

                            <figcaption class="member-overlay">
                                <div class="member-overlay-content">
                                    <h3 class="member-title">Bruce Sutton<span>Sales & Marketing Manager</span></h3><!-- End .member-title -->
                                    <p>Sed pretium, ligula sollicitudin viverra, tortor libero sodales leo, eget blandit nunc.</p>
                                    <div class="social-icons social-icons-simple">
                                        <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                        <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                        <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                    </div><!-- End .soial-icons -->
                                </div><!-- End .member-overlay-content -->
                            </figcaption><!-- End .member-overlay -->
                        </figure><!-- End .member-media -->
                        <div class="member-content">
                            <h3 class="member-title">Bruce Sutton<span>Sales & Marketing Manager</span></h3><!-- End .member-title -->
                        </div><!-- End .member-content -->
                    </div><!-- End .member -->
                </div><!-- End .col-md-4 -->

                <div class="col-md-4">
                    <div class="member member-anim text-center">
                        <figure class="member-media">
                            <img src="{{ asset('frontend') }}/images/team/member-3.jpg" alt="member photo">

                            <figcaption class="member-overlay">
                                <div class="member-overlay-content">
                                    <h3 class="member-title">Janet Joy<span>Product Manager</span></h3><!-- End .member-title -->
                                    <p>Sed pretium, ligula sollicitudin viverra, tortor libero sodales leo, eget blandit nunc.</p>
                                    <div class="social-icons social-icons-simple">
                                        <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                        <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                        <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                    </div><!-- End .soial-icons -->
                                </div><!-- End .member-overlay-content -->
                            </figcaption><!-- End .member-overlay -->
                        </figure><!-- End .member-media -->
                        <div class="member-content">
                            <h3 class="member-title">Janet Joy<span>Product Manager</span></h3><!-- End .member-title -->
                        </div><!-- End .member-content -->
                    </div><!-- End .member -->
                </div><!-- End .col-md-4 -->
            </div><!-- End .row --> --}}
        </div><!-- End .container -->

        <div class="mb-2"></div><!-- End .mb-2 -->

        <div class="about-testimonials bg-light-2 pt-6 pb-6">
            <div class="container">
                <h2 class="title text-center mb-3">Customer Say About Us</h2><!-- End .title text-center -->

                <div class="owl-carousel owl-simple owl-testimonials-photo" data-toggle="owl"
                    data-owl-options='{
                        "nav": false,
                        "dots": true,
                        "margin": 20,
                        "loop": false,
                        "responsive": {
                            "1200": {
                                "nav": true
                            }
                        }
                    }'>
                    <blockquote class="testimonial text-center">
                        <img src="{{ asset('frontend') }}/images/testimonials/user-1.jpg" alt="user">
                        <p>“A fantastic shopping experience! The mall has everything you need with a great variety of stores and brands. Clean, well-organized, and the staff is incredibly helpful. Highly recommend visiting!”</p>
                        <cite>
                            Jenson Gregory
                            <span>Customer</span>
                        </cite>
                    </blockquote><!-- End .testimonial -->

                    <blockquote class="testimonial text-center">
                        <img src="{{ asset('frontend') }}/images/testimonials/user-2.jpg" alt="user">
                        <p>“Amazing place to shop and relax! There’s something for everyone, from top brands to unique finds. The atmosphere is welcoming, and the dining options are great. Always a pleasure to visit!”</p>

                        <cite>
                            Victoria Ventura
                            <span>Customer</span>
                        </cite>
                    </blockquote><!-- End .testimonial -->
                </div><!-- End .testimonials-slider owl-carousel -->
            </div><!-- End .container -->
        </div><!-- End .bg-light-2 pt-5 pb-6 -->
    </div><!-- End .page-content -->
</main><!-- End .main -->

@endsection
