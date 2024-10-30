@extends('frontend.layout.app')

@section('content')
<main class="main">
    <div class="intro-slider-container">
        <div class="intro-slider owl-carousel owl-simple owl-nav-inside owl-light" data-toggle="owl" data-owl-options='{"nav":false, "dots": false, "loop": false}'>
            <div class="intro-slide" style="background-image: url({{ asset('frontend') }}/images/demos/demo-15/slider/slide-1.jpg);">
                <div class="container intro-content text-center">
                    <h3 class="intro-subtitle text-white">The seasons are changing, and so is our event lineup!</h3><!-- End .h3 intro-subtitle -->
                    <h1 class="intro-title text-white">Fall into Fun</h1><!-- End .intro-title -->

                    <a href="#scroll-to-content" class="btn btn-outline-primary-2 scroll-to">
                        <span>Start scrolling</span>
                        <i class="icon-long-arrow-down"></i>
                    </a>
                </div><!-- End .intro-content -->
            </div><!-- End .intro-slide -->
        </div><!-- End .intro-slider owl-carousel owl-simple -->

        <span class="slider-loader text-white"></span><!-- End .slider-loader -->
    </div><!-- End .intro-slider-container -->

    <div class="display-row" id="scroll-to-content">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-last">
                    <div class="banner banner-overlay">
                        <a href="#">
                            <img src="{{ asset('frontend') }}/images/demos/demo-15/banners/banner-1.jpg" alt="Banner">
                        </a>
                    </div><!-- End .banner -->
                </div><!-- End .col-lg-6 -->

                <div class="col-lg-6">
                    <div class="heading text-center">
                        <h2 class="title">Your Marketplace</h2><!-- End .title text-center -->
                        <p class="title-desc">CALGARY'S LOCAL BUSINESS MARKETPLACE Make one discovery after another with our growing community of local merchants, personal services, artisans and fresh market vendors. SMALL SHOPS, HUGE VARIETY.</p><!-- End .title-desc -->
                    </div><!-- End .heading -->

                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="row">
                                <div class="col-6">
                                    <div class="product product-4">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="{{ asset('frontend') }}/images/demos/demo-15/products/product-1.jpg" alt="Product image" class="product-image">
                                            </a>
                                        </figure><!-- End .product-media -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 -->

                                <div class="col-6">
                                    <div class="product product-4">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="{{ asset('frontend') }}/images/demos/demo-15/products/product-2.jpg" alt="Product image" class="product-image">
                                            </a>
                                        </figure><!-- End .product-media -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .row -->
                        </div><!-- End .col-lg-8 offset-lg-2 -->
                    </div><!-- End .row -->
                </div><!-- End .col-lg-6 -->
            </div><!-- End .row -->
        </div><!-- End .container-fluid -->
    </div><!-- End .display-row -->

    <div class="display-row" style="background-color: #f2f2f2;">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner banner-light banner-overlay">
                        <a href="#">
                            <img src="{{ asset('frontend') }}/images/demos/demo-15/banners/banner-2.jpg" alt="Banner">
                        </a>
                    </div><!-- End .banner -->
                </div><!-- End .col-lg-6 -->

                <div class="col-lg-6">
                    <div class="heading text-center">
                        <h2 class="title">About The mall</h2><!-- End .title text-center -->
                        <p class="title-desc">New Horizon Mall offers a unique shopping experience heightened with family entertainment, monthly events, celebrations, and so much more. And we’re growing – stay in the loop about what’s new and upcoming!</p><!-- End .title-desc -->
                    </div><!-- End .heading -->

                    <div class="row">
                        <div class="col-6 col-md-4">
                            <div class="product product-4">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="{{ asset('frontend') }}/images/demos/demo-15/products/product-3.jpg" alt="Product image" class="product-image">
                                        <img src="{{ asset('frontend') }}/images/demos/demo-15/products/product-3-2.jpg" alt="Product image" class="product-image-hover">
                                    </a>
                                </figure><!-- End .product-media -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 -->

                        <div class="col-6 col-md-4">
                            <div class="product product-4">
                                <figure class="product-media">
                                    <a href="ml">
                                        <img src="{{ asset('frontend') }}/images/demos/demo-15/products/product-4.jpg" alt="Product image" class="product-image">
                                        <img src="{{ asset('frontend') }}/images/demos/demo-15/products/product-4-2.jpg" alt="Product image" class="product-image-hover">
                                    </a>
                                </figure><!-- End .product-media -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 -->

                        <div class="col-6 col-md-4">
                            <div class="product product-4">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="{{ asset('frontend') }}/images/demos/demo-15/products/product-5.jpg" alt="Product image" class="product-image">
                                        <img src="{{ asset('frontend') }}/images/demos/demo-15/products/product-5-2.jpg" alt="Product image" class="product-image-hover">
                                    </a>
                                </figure><!-- End .product-media -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 -->
                    </div><!-- End .row -->
                </div><!-- End .col-lg-6 -->
            </div><!-- End .row -->
        </div><!-- End .container-fluid -->
    </div><!-- End .display-row .bg-light -->

    <div class="blog-posts mb-9">
        <div class="container-fluid">
            <div class="owl-carousel owl-simple" data-toggle="owl"
                data-owl-options='{
                    "nav": false,
                    "dots": true,
                    "items": 3,
                    "margin": 20,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":1
                        },
                        "520": {
                            "items":2
                        },
                        "768": {
                            "items":3
                        },
                        "992": {
                            "items":4
                        }
                    }
                }'>
                <article class="entry">
                    <figure class="entry-media">
                        <a href="#">
                            <img src="{{ asset('frontend') }}/images/demos/demo-15/blog/post-5.png" alt="image desc">
                        </a>
                    </figure><!-- End .entry-media -->
                </article><!-- End .entry -->

                <article class="entry">
                    <figure class="entry-media">
                        <a href="#">
                            <img src="{{ asset('frontend') }}/images/demos/demo-15/blog/post-6.png" alt="image desc">
                        </a>
                    </figure><!-- End .entry-media -->
                </article><!-- End .entry -->

                <article class="entry">
                    <figure class="entry-media">
                        <a href="#">
                            <img src="{{ asset('frontend') }}/images/demos/demo-15/blog/post-7.png" alt="image desc">
                        </a>
                    </figure><!-- End .entry-media -->
                </article><!-- End .entry -->

                <article class="entry">
                    <figure class="entry-media">
                        <a href="#">
                            <img src="{{ asset('frontend') }}/images/demos/demo-15/blog/post-8.png" alt="image desc">
                        </a>
                    </figure><!-- End .entry-media -->
                </article><!-- End .entry -->
                <article class="entry">
                    <figure class="entry-media">
                        <a href="#">
                            <img src="{{ asset('frontend') }}/images/demos/demo-15/blog/post-9.png" alt="image desc">
                        </a>
                    </figure><!-- End .entry-media -->
                </article><!-- End .entry -->
            </div><!-- End .owl-carousel -->
        </div><!-- End .container-fluid -->
    </div><!-- End .blog-posts -->

    <div class="video-banner video-banner-bg video-fullheight bg-image text-center" style="background-image: url({{ asset('frontend') }}/images/demos/demo-15/bg-1.jpg)">
        <div class="container">
            <h3 class="video-banner-title h1 text-white">Deals & Discounts<span>Find out about the best deals to save you money across the entire mall.</span></h3><!-- End .video-banner-title -->
            {{-- <a href="https://www.youtube.com/watch?v=vBPgmASQ1A0" class="btn-video btn-iframe"><i class="icon-play"></i></a> --}}
        </div><!-- End .container -->
    </div><!-- End .video-banner bg-image -->


    <div class="mb-2"></div><!-- End .mb-2 -->

    {{-- <div class="container-fluid">
        <div class="cta cta-separator">
            <div class="row">
                <div class="col-lg-6">
                    <div class="cta-wrapper cta-text text-center">
                        <h3 class="cta-title">Shop Social</h3><!-- End .cta-title -->
                        <p class="cta-desc">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p><!-- End .cta-desc -->

                        <div class="social-icons social-icons-colored justify-content-center">
                            <a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                            <a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                            <a href="#" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                            <a href="#" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                            <a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                        </div><!-- End .soial-icons -->
                    </div><!-- End .cta-wrapper -->
                </div><!-- End .col-lg-6 -->

                <div class="col-lg-6">
                    <div class="cta-wrapper text-center">
                        <h3 class="cta-title mb-2">Our Costumers Say</h3><!-- End .cta-title -->

                        <div class="owl-carousel owl-simple owl-testimonials" data-toggle="owl"
                            data-owl-options='{
                                "nav": false,
                                "dots": true,
                                "margin": 20,
                                "loop": true,
                                "responsive": {
                                    "1500": {
                                        "nav": true
                                    }
                                }
                            }'>
                            <blockquote class="testimonial testimonial-icon text-center">
                                <p>“ Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. ”</p>

                                <cite>
                                    Charly Smith,
                                    <span>Customer</span>
                                </cite>
                            </blockquote><!-- End .testimonial -->

                            <blockquote class="testimonial testimonial-icon text-center">
                                <p>“ Impedit, ratione sequi, sunt incidunt magnam et. Delectus obcaecati optio eius error libero perferendis nesciunt atque. ”</p>

                                <cite>
                                    Damon Stone
                                    <span>Customer</span>
                                </cite>
                            </blockquote><!-- End .testimonial -->

                            <blockquote class="testimonial testimonial-icon text-center">
                                <p>“ Perferendis perspiciatis, voluptate, distinctio earum veritatis animi tempora eget blandit nunc tortor eu nibh. ”</p>

                                <cite>
                                    John Smith
                                    <span>Customer</span>
                                </cite>
                            </blockquote><!-- End .testimonial -->
                        </div><!-- End .testimonials-slider owl-carousel -->
                    </div><!-- End .cta-wrapper -->
                </div><!-- End .col-lg-6 -->
            </div><!-- End .row -->
        </div><!-- End .cta -->
    </div><!-- End .container-fluid --> --}}

    <div class="mb-7"></div><!-- End .mb-7 -->

    <div class="blog-posts mb-9">
        <div class="container-fluid">
            <div class="heading text-center">
                <h2 class="title">Event</h2><!-- End .title text-center -->
            </div><!-- End .heading -->
            <div class="owl-carousel owl-simple" data-toggle="owl"
                data-owl-options='{
                    "nav": false,
                    "dots": true,
                    "items": 3,
                    "margin": 20,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":1
                        },
                        "520": {
                            "items":2
                        },
                        "768": {
                            "items":3
                        },
                        "992": {
                            "items":3
                        }
                    }
                }'>
                <article class="entry">
                    <figure class="entry-media">
                        <a href="#">
                            <img src="{{ asset('frontend') }}/images/demos/demo-15/blog/post-1.jpg" alt="image desc">
                        </a>
                    </figure><!-- End .entry-media -->

                    <div class="entry-body text-center">
                        <div class="entry-meta">
                            <a href="#">Oct 31</a>
                        </div><!-- End .entry-meta -->

                        <h3 class="entry-title">
                            <a href="#">Trick-or-Treat!</a>
                        </h3><!-- End .entry-title -->

                        <div class="entry-content">
                            <p>Get ready for a spook-tacular time! Join us for trick-or-treating on Halloween from 11:00 AM to 4:00 PM at participating stores.</p>
                        </div><!-- End .entry-content -->
                    </div><!-- End .entry-body -->
                </article><!-- End .entry -->

                <article class="entry">
                    <figure class="entry-media">
                        <a href="#">
                            <img src="{{ asset('frontend') }}/images/demos/demo-15/blog/post-2.jpg" alt="image desc">
                        </a>
                    </figure><!-- End .entry-media -->

                    <div class="entry-body text-center">
                        <div class="entry-meta">
                            <a href="#">Nov 4</a>
                        </div><!-- End .entry-meta -->

                        <h3 class="entry-title">
                            <a href="#">Pumpkin Smash 2024</a>
                        </h3><!-- End .entry-title -->

                        <div class="entry-content">
                            <p>Looking for a fun way to dispose of your pumpkins? Drop your own pumpkin from the second level onto the target on the floor below for $5!</p>
                        </div><!-- End .entry-content -->
                    </div><!-- End .entry-body -->
                </article><!-- End .entry -->

                <article class="entry">
                    <figure class="entry-media">
                        <a href="#">
                            <img src="{{ asset('frontend') }}/images/demos/demo-15/blog/post-3.jpg" alt="image desc">
                        </a>
                    </figure><!-- End .entry-media -->

                    <div class="entry-body text-center">
                        <div class="entry-meta">
                            <a href="#">Jan 16 - Dec 31</a>
                        </div><!-- End .entry-meta -->

                        <h3 class="entry-title">
                            <a href="#">Seniors' Day</a>
                        </h3><!-- End .entry-title -->

                        <div class="entry-content">
                            <p>Every Tuesday is Seniors Day at The Hudson's Bay! Save up to an Extra 15% *in store only.</p>
                        </div><!-- End .entry-content -->
                    </div><!-- End .entry-body -->
                </article><!-- End .entry -->

                <article class="entry">
                    <figure class="entry-media">
                        <a href="#">
                            <img src="{{ asset('frontend') }}/images/demos/demo-15/blog/post-4.jpg" alt="image desc">
                        </a>
                    </figure><!-- End .entry-media -->

                    <div class="entry-body text-center">
                        <div class="entry-meta">
                            <a href="#">Nov 15 - Dec 24</a>
                        </div><!-- End .entry-meta -->

                        <h3 class="entry-title">
                            <a href="#">Santa Photos</a>
                        </h3><!-- End .entry-title -->

                        <div class="entry-content">
                            <p>Capture the magic of the season with our enchanting Santa Photo Sessions! </p>
                        </div><!-- End .entry-content -->
                    </div><!-- End .entry-body -->
                </article><!-- End .entry -->
            </div><!-- End .owl-carousel -->
        </div><!-- End .container-fluid -->
    </div><!-- End .blog-posts -->
</main><!-- End .main -->
@endsection
