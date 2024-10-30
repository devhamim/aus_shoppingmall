@extends('frontend.layout.app')

@section('content')
    <!-- Page Header Start -->
	<div class="page-header parallaxie">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						{{-- <h1 class="text-anime-style-3" data-cursor="-opaque">Careers</h1> --}}

					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

<!--==================================================-->
<!-- start career list Area -->
<!--==================================================-->
<div class="about-area inner">
	<div class="careerlist" style="padding: 70px 0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Careers List</h2>
                    <p>In addition to australia nationals, our team comprises of expatriates from various other nationalities. Your career can be pursued in the following departments.</p>

                    <p>Our passionate workforce offers our customers with quality service that is trusted, treasured and experienced repeatedly. For any inquiries related to job vacancies.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            Careers List
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th>No.</th>
                                    <th>Department</th>
                                    <th>Position</th>
                                    <th>Vacancy</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($careerlists as $sl=>$careerlist)
                                    <tr>
                                        <td>{{$sl+1}}</td>
                                        <td>{{ $careerlist->department }}</td>
                                        <td>{{ $careerlist->post }}</td>
                                        <td>{{ $careerlist->vacancy }}</td>
                                        <td>
                                            <a href="{{route('careers.applay',$careerlist->id)}}" class="btn btn-primary">Apply Now</a>
                                        </td>
                                    </tr>
                                    @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End career list Area -->
<!--==================================================-->



@endsection
