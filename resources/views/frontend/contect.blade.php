@extends('frontend.layout.app')
@section('content')

<main class="main">
    <div class="page-header page-header-big text-center" style="background-image: url('{{ asset('frontend') }}/images/about-header-bg2.jpg')">
        <h1 class="page-title text-white">Contact us<span class="text-white">keep in touch with us</span></h1>
    </div><!-- End .page-header -->

    <div class="page-content pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-2 mb-lg-0">
                    <h2 class="title mb-1">Contact Information</h2><!-- End .title mb-2 -->

                    <div class="row">
                        <div class="col-sm-7 pt-3">
                            <div class="contact-info">
                                {{-- <h3>The Office</h3> --}}

                                <ul class="contact-list">
                                    <li>
                                        <i class="icon-map-marker"></i>
                                        @if ($settings->first()->address != null)
                                        <span>{{ $settings->first()->address }}</span>
                                        @endif

                                    </li>

                                    <li>
                                        <i class="icon-envelope"></i>
                                        @if ($settings->first()->email != null)
                                            <a href="mailto:{{ $settings->first()->email }}">{{ $settings->first()->email }}</a>
							            @endif

                                    </li>
                                </ul><!-- End .contact-list -->
                            </div><!-- End .contact-info -->
                        </div><!-- End .col-sm-7 -->

                        <div class="col-sm-5 pt-3">
                            <div class="contact-info">
                                {{-- <h3>The Office</h3> --}}

                                <ul class="contact-list">
                                    <li>
                                        <i class="icon-clock-o"></i>
                                        <span class="text-dark">Monday-Saturday</span> <br>10am-6pm
                                    </li>
                                    <li>
                                        <i class="icon-calendar"></i>
                                        <span class="text-dark">Sunday</span> <br>12am-5pm
                                    </li>
                                </ul><!-- End .contact-list -->
                            </div><!-- End .contact-info -->
                        </div><!-- End .col-sm-5 -->
                    </div><!-- End .row -->
                </div><!-- End .col-lg-6 -->
                <div class="col-lg-6">
                    <h2 class="title mb-1">Got Any Questions?</h2><!-- End .title mb-2 -->

                    <form method="POST" action="{{ route('customerMessage.store') }}" class="contact-form mb-3">
                        @csrf
                        <div class="row pt-3">
                            <div class="col-sm-6">
                                <label for="cname" class="sr-only">Name</label>
                                <input type="text" name="name" class="form-control" id="cname" placeholder="Name *" required>
                            </div><!-- End .col-sm-6 -->

                            <div class="col-sm-6">
                                <label for="cemail" class="sr-only">Email</label>
                                <input type="email" name="email" class="form-control" id="cemail" placeholder="Email *" required>
                            </div><!-- End .col-sm-6 -->
                        </div><!-- End .row -->

                        <div class="row">
                            <div class="col-sm-6">
                                <label for="cphone" class="sr-only">Phone</label>
                                <input type="tel" name="phone" class="form-control" id="cphone" placeholder="Phone">
                            </div><!-- End .col-sm-6 -->

                            <div class="col-sm-6">
                                <label for="csubject" class="sr-only">Subject</label>
                                <input type="text" name="subject" class="form-control" id="csubject" placeholder="Subject">
                            </div><!-- End .col-sm-6 -->
                        </div><!-- End .row -->

                        <label for="cmessage" class="sr-only">Message</label>
                        <textarea class="form-control" name="message" cols="30" rows="4" id="cmessage" required placeholder="Message *"></textarea>

                        <button type="submit" class="btn btn-outline-primary-2 btn-minwidth-sm">
                            <span>SUBMIT</span>
                            <i class="icon-long-arrow-right"></i>
                        </button>
                    </form><!-- End .contact-form -->
                </div><!-- End .col-lg-6 -->
            </div><!-- End .row -->

            <div class="mt-4 mb-5"></div>
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->

@endsection
