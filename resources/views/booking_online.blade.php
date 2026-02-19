@extends('layouts.master')


@section('content')



@push("styles")
	
@endpush

<main class="main white" role="main">
		<!-- Intro -->
	<?php // include("includes/herobanner.php"); ?>
    <!-- @include('includes.herobanner-innerpage') -->

	<div class="keyvisual" style="margin-bottom:30px">
		<img src="{{ asset('assets/images/uploads/glasgowtoairporttaxi.png') }}" alt="">
	</div>
		<!-- //Intro -->
		
		
<!--  -->
<div class="wrap ">
			<div class="row">
				<!--- Content -->
				<div class="full-width content textongrey">
					<h2>Services</h2>
					
					<iframe src="https://699793ca1caa1.trial.easytaxioffice.com/booking?site_key=7e3f3d3085b900d598bc40543d611575" id="eto-iframe-booking" allow="geolocation" width="100%" height="250" scrolling="no" frameborder="0" style="width:1px; min-width:100%; border:0;"></iframe>
					<script src="https://699793ca1caa1.trial.easytaxioffice.com/assets/plugins/iframe-resizer/iframeResizer.min.js"></script>
					<script>iFrameResize({log:false, targetOrigin:'*', checkOrigin:false}, "iframe#eto-iframe-booking");</script>


				</div>
				<!--- //Content -->
			</div>
		</div>
<!--  -->




		<!-- Services iconic -->
		@include('includes.iconicServices-includes')
		<!-- //Services iconic -->




		<!--  Fleet Carousel -->

		@include('includes.ourfleet-includes')

		<!-- Fleet Carousel -->


		
	</main>

@push("scripts")
<script src=" {{ asset('assets/js/jquery-ui-timepicker-addon.min.js') }}"></script> 
@endpush

@endsection