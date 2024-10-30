@extends('frontend.layout.app')

@section('content')

<main class="main">
    <div class="page-header page-header-big text-center" style="background-image: url('{{ asset('frontend') }}/images/contact-header-bg.jpg')">
        <h1 class="page-title text-white">Event</h1>
    </div><!-- End .page-header -->

    <div class="page-content">
        <div class="container">

            <div class="entry-container max-col-2">
                <div class="entry-item lifestyle shopping col-sm-6">
                    <article class="entry entry-grid text-center">
                        <figure class="entry-media">
                            <a href="#">
                                <img src="{{ asset('frontend') }}/images/demos/demo-15/blog/post-1.jpg" alt="image desc">
                            </a>
                        </figure><!-- End .entry-media -->

                        <div class="entry-body">

                            <h2 class="entry-title">
                                <a href="#">Trick-or-Treat!</a>
                            </h2><!-- End .entry-title -->

                            <div class="entry-cats">
                                Get ready for a spook-tacular time! Join us for trick-or-treating on Halloween from 11:00 AM to 4:00 PM at participating stores.
                            </div><!-- End .entry-cats -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->
                </div><!-- End .entry-item -->
                <div class="entry-item lifestyle shopping col-sm-6">
                    <article class="entry entry-grid text-center">
                        <figure class="entry-media">
                            <a href="#">
                                <img src="{{ asset('frontend') }}/images/demos/demo-15/blog/post-2.jpg" alt="image desc">
                            </a>
                        </figure><!-- End .entry-media -->

                        <div class="entry-body">

                            <h2 class="entry-title">
                                <a href="#">Pumpkin Smash 2024</a>
                            </h2><!-- End .entry-title -->

                            <div class="entry-cats">
                                Looking for a fun way to dispose of your pumpkins? Drop your own pumpkin from the second level onto the target on the floor below for $5!
                            </div><!-- End .entry-cats -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->
                </div><!-- End .entry-item -->
                <div class="entry-item lifestyle shopping col-sm-6">
                    <article class="entry entry-grid text-center">
                        <figure class="entry-media">
                            <a href="#">
                                <img src="{{ asset('frontend') }}/images/demos/demo-15/blog/post-3.jpg" alt="image desc">
                            </a>
                        </figure><!-- End .entry-media -->

                        <div class="entry-body">

                            <h2 class="entry-title">
                                <a href="#">Seniors' Day</a>
                            </h2><!-- End .entry-title -->

                            <div class="entry-cats">
                                Every Tuesday is Seniors Day at The Hudson's Bay! Save up to an Extra 15% *in store only.
                            </div><!-- End .entry-cats -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->
                </div><!-- End .entry-item -->
                <div class="entry-item lifestyle shopping col-sm-6">
                    <article class="entry entry-grid text-center">
                        <figure class="entry-media">
                            <a href="#">
                                <img src="{{ asset('frontend') }}/images/demos/demo-15/blog/post-4.jpg" alt="image desc">
                            </a>
                        </figure><!-- End .entry-media -->

                        <div class="entry-body">

                            <h2 class="entry-title">
                                <a href="#">Santa Photos</a>
                            </h2><!-- End .entry-title -->

                            <div class="entry-cats">
                                Capture the magic of the season with our enchanting Santa Photo Sessions!
                            </div><!-- End .entry-cats -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->
                </div><!-- End .entry-item -->

            </div><!-- End .entry-container -->

        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main>

@endsection
