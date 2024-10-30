@extends('frontend.layout.app')

@section('content')
    <!-- Page Header Start -->
	<div class="page-header parallaxie">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						{{-- <h1 class="text-anime-style-3" data-cursor="-opaque">Success</h1> --}}

					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->


<div class="about-area inner">
    <div class="container" style="padding: 100px 0">
       <div class="row">
        <div class="col-lg-12 m-auto text-center">
            <h4 class="text-success">Success</h4>
            <img width="100px" src="{{asset('frontend/assets/images/home-1/success.png')}}" alt="">
            <p>Thank you for submitting your application. We have successfully received your application.

                Your interest in joining our team is appreciated. Our hiring team will now review your application and qualifications. If your skills and experience align with our needs, we will contact you for the next steps in the hiring process.

                Please note that due to the volume of applications we receive, this process may take some time. We appreciate your patience.

                If you have any questions or need further assistance, feel free to contact our Human Resources department.

                Thank you again for considering your potential employer. We wish you the best of luck in your job search.</p>
                <a href="{{url('/')}}" class="btn btn-banger mt-5" style="background: #F94A29; padding: 10px 30px; color: #fff">Home</a>
        </div>

       </div>
    </div>
</div>

<!--==================================================-->
<!-- End career list Area -->
<!--==================================================-->
@endsection

