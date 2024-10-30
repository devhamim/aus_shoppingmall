<footer class="footer">
    <div class="footer-middle">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-lg-5">
                    <div class="widget widget-about">
                        @if ($setting->first()->footer_logo != null)
                            <img src="{{ asset('uploads/setting') }}/{{ $setting->first()->footer_logo }}" class="footer-logo" alt="Footer Logo" width="105" height="25">
                        @endif

                        @if ( $setting->first()->about != null)
                            <p>{{ $setting->first()->about }}</p>
                        @endif

                        <div class="widget-about-info">
                            <div class="row">

                                <div class="col-sm-6 col-md-8">
                                    <span class="widget-about-title">Payment Method</span>
                                    <figure class="footer-payments">
                                        <img src="{{ asset('frontend') }}/images/payments.png" alt="Payment methods" width="272" height="20">
                                    </figure><!-- End .footer-payments -->
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .row -->
                        </div><!-- End .widget-about-info -->
                    </div><!-- End .widget about-widget -->
                </div><!-- End .col-sm-12 col-lg-4 -->

                <div class="col-sm-4 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title">Useful Links</h4><!-- End .widget-title -->

                        <ul class="widget-list">
                            <li><a href="{{ route('contect') }}">Contact</a></li>
                            <li><a href="{{route('career')}}">Career</a></li>
                            <li><a href="{{ route('our.privacy.policy') }}">Privacy Policy</a></li>
                            <li><a href="{{ route('our.privacy.policy') }}">Terms and Conditions</a></li>
                        </ul><!-- End .widget-list -->
                    </div><!-- End .widget -->
                </div><!-- End .col-sm-4 col-lg-2 -->

                <div class="col-sm-4 col-lg-4">
                    <div class="widget">
                        <h4 class="widget-title">Customer Service</h4><!-- End .widget-title -->

                        <ul class="widget-list">
                            <li>Mail:<a href="{{ $setting->first()->email }}">{{ $setting->first()->email }}</a></li>
                            <li>Address:<a href="{{ $setting->first()->address }}">{{ $setting->first()->address }}</a></li>

                        </ul><!-- End .widget-list -->
                    </div><!-- End .widget -->
                </div><!-- End .col-sm-4 col-lg-2 -->

            </div><!-- End .row -->
        </div><!-- End .container-fluid -->
    </div><!-- End .footer-middle -->

    <div class="footer-bottom">
        <div class="container-fluid">
            @if ($setting->first()->footer != null)
            <p>{{ $setting->first()->footer }}</p>
        @endif
        </div><!-- End .container-fluid -->
    </div><!-- End .footer-bottom -->
</footer><!-- End .footer -->
