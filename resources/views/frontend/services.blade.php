@extends('frontend.layout.app')

@section('content')

<main class="main">
    <div class="page-header page-header-big text-center" style="background-image: url('{{ asset('frontend') }}/images/about-header-bg1.jpg')">
        <h1 class="page-title text-white">Our Services</h1>
    </div><!-- End .page-header -->
    <div class="bg-light-2 pt-6 pb-5 mb-6 mb-lg-8">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mb-3 mb-lg-0">
                    <h2> SECURITY AT NORTHLAND</h2>
                    <p class="lead">Safe and Secure Environment Northland proudly uses the services of Paladin Security Group Ltd. to ensure everyone has an enjoyable shopping experience. Our goal is to provide a safe and secure environment for our merchants and customers. We will serve and protect persons and property at Northland, ensuring that individual actions will not interfere with the public enjoyment of the mall. Our security team works closely with other store security within the mall and the Calgary Police, to accomplish this goal.</p>
                </div><!-- End .col-lg-5 -->

                <div class="col-lg-6 offset-lg-1">
                    <div>
                        <img src="{{ asset('frontend') }}/images/about/img-2.jpg" alt="" class="about-img-front">

                    </div><!-- End .about-images -->
                </div><!-- End .col-lg-6 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div>
    <div class="bg-light-2 pt-6 pb-5 mb-6 mb-lg-8">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-3 mb-lg-0">
                    <h2>Primaris Customer Service Accessibility Policy</h2>
                    <p class="lead">Primaris is committed to providing its services to persons with disabilities in a manner that is consistent with the principles of respecting the dignity of persons with disabilities, equality of opportunity, integration and independence.</p>
                    <p class="lead">Persons who wish to provide feedback on the way Northland provides services to people with disabilities may do so in the following ways:</p>
                    <ul>
                        <li>In person at the Administration Office within any of our properties</li>
                        <li>Ask for the Director, People & Culture</li>
                        <li>In writing to: Director, People & Culture, Primaris</li>
                        <li>Electronically by sending an email</li>
                        <li>All feedback will be directed to the Director, People & Culture and the Executive Vice President. Those who provide feedback may expect to receive a response, provided that the feedback has not been given anonymously and that contact information has been provided.</li>
                    </ul>
                </div><!-- End .col-lg-5 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div>

    <div class="cta cta-display bg-image pt-4 pb-4" style="background-image: url({{ asset('frontend') }}/images/backgrounds/cta/bg-7.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9 col-xl-7">
                    <div class="row no-gutters flex-column flex-sm-row align-items-sm-center">
                        <div class="col">
                            <h3 class="cta-title text-white">IF You Have More Questions</h3><!-- End .cta-title -->
                            <p class="cta-desc text-white">Fill free to contact us.</p><!-- End .cta-desc -->
                        </div><!-- End .col -->

                        <div class="col-auto">
                            <a href="{{ route('contect') }}" class="btn btn-outline-white"><span>CONTACT US</span><i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .col-auto -->
                    </div><!-- End .row no-gutters -->
                </div><!-- End .col-md-10 col-lg-9 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .cta -->
</main><!-- End .main -->

@endsection
