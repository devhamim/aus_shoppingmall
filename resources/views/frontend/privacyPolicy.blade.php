@extends('frontend.layout.app')
@section('content')

<!-- Team Section -->
<div class="container pt-5 ">
	<div class="row pt-5 ">
		<div class="team-block col-lg-12 col-md-12 col-sm-12 pt-5">
			<div class="inner-box">
				@if ($privacyPolicy->first()->id != null)
				<p>{!! $privacyPolicy->first()->description !!}</p>
				@endif
			</div>
		</div>
	</div>
</div>
<!-- End Team Section -->
@endsection
