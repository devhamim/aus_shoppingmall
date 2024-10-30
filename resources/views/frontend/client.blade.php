@extends('frontend.layout.app')
@section('content')

<main class="main">
    <div class="page-header page-header-big text-center" style="background-image: url('{{ asset('frontend') }}/images/about-header-bg3.jpg')">
        <h1 class="page-title text-white">Hours and Location</h1>
    </div><!-- End .page-header -->

    <div class="page-content pb-0">
        <div class="container">
            <div class="row pb-3">
              <!-- Left Column -->
              <div class="col-lg-8">
                <p><strong>Please note we are is CLOSED on:</strong></p>
                <ul>
                  <li>New Year's Day</li>
                  <li>Christmas Day</li>
                </ul>

                <h4 class="mt-4">PLAN YOUR VISIT</h4>
                <p>{{ $settings->first()->address }}</p>
                <p>
                    <a href="mailto:{{ $settings->first()->email }}">{{ $settings->first()->email }}</a>
                </p>
              </div>

              <!-- Right Column -->
              <div class="col-lg-4">
                <h5>Business Hours</h5>
                <ul class="list-unstyled">
                  <li>Sunday: 12:00 pm - 5:00 pm</li>
                  <li>Monday: 10:00 am - 6:00 pm</li>
                  <li>Tuesday: 10:00 am - 6:00 pm</li>
                  <li>Wednesday: 10:00 am - 6:00 pm</li>
                  <li>Thursday: 10:00 am - 6:00 pm</li>
                  <li>Friday: 10:00 am - 6:00 pm</li>
                  <li>Saturday: 10:00 am - 6:00 pm</li>
                </ul>

                <h5>Stat Holiday Hours</h5>
                <p>12:00 pm - 5:00 pm</p>

                <h5>Theatre Hours</h5>
                <p><strong>LANDMARK CINEMA</strong></p>
                <ul class="list-unstyled">
                  <li>Monday - Sunday: 12:00 pm - 12:00 am</li>
                </ul>
              </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2370.526847928772!2d-113.4937596!3d53.5435636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53a018f085b0eaf1%3A0x8a38b8b5b44a5ea4!2sEdmonton%20City%20Centre!5e0!3m2!1sen!2sca!4v1639752753208!5m2!1sen!2sca" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                      </div>
                </div>
            </div>
          </div>


    </div><!-- End .page-content -->
</main><!-- End .main -->

@endsection
