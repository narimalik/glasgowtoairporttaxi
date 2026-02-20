@extends('layouts.master')


@section('content')



@push("styles")
	<link href="{{ asset('assets/css/carousel_fleet.css') }}" rel="stylesheet">
@endpush

<main class="main white" role="main">
		<!-- Intro -->
	<?php // include("includes/herobanner.php"); ?>
    <!-- @include('includes.herobanner-innerpage') -->

	<div class="keyvisual" style="margin-bottom:30px">
		<img src="{{ asset('assets/images/uploads/banner_aboutus.png') }}" alt="">
	</div>
		<!-- //Intro -->
		
		
<!--  -->
<div class="wrap">
			<div class="row">
				<!--- Content -->
				<div class="full-width content textongrey">
					<h2>About Us</h2>
					<p>
						Welcome to your trusted private hire and executive car service in Glasgow, proudly serving the city and surrounding areas with reliable, 
						professional, and comfortable travel solutions. We specialise in airport transfers, private hire journeys, 
						and transport for parties and special events, delivering a premium experience from start to finish. Our mission is simple: to 
						provide a punctual, stress-free, and high-quality chauffeur service that our customers can rely on at any time of 
						day or night. Whether you are travelling for business, leisure, or a special occasion, we are committed to getting you to your 
						destination safely, comfortably, and on time. <br />
						We operate a modern fleet of executive cars, carefully selected to meet the highest standards of comfort, cleanliness, and style.
						 Every vehicle is fully licensed, regularly maintained, and immaculately cleaned, ensuring a smooth and enjoyable journey every time you travel with us.
					</p>

					

					<p>
						We specialise in reliable airport transfers to and from Glasgow Airport, Edinburgh Airport, Prestwick Airport, and surrounding airports. We understand how 
						important punctuality is when it comes to flights, which is why we plan every journey carefully to ensure timely arrivals and smooth pickups.
						
						Make your event travel effortless with our private hire service for parties and special occasions. From birthdays and weddings to corporate events and nights out, we provide stylish and dependable transport so you can focus on enjoying the moment.<br/>
						
						<br/>Our executive cars offer:
						
						<ul>						
							<li>A comfortable and spacious interior</li>

							<li>A professional, discreet service</li>

							<li>Reliable pickup times and flexible scheduling</li>
						</ul>
					</p>
					<p>
						Arrive at your event relaxed, on time, and in comfort, knowing your transport is taken care of by experienced professionals. We operate 24 hours a day, 7 days a week, offering complete flexibility to suit your schedule. Early morning airport runs, 
						late-night returns, or last-minute bookings – we are always available when you need us.
						Punctuality is at the heart of our service. We pride ourselves on being on time, every time, with careful route planning and local knowledge of Glasgow and surrounding areas to avoid delays wherever possible.
					</p>

				</div>
				<!--- //Content -->
			</div>
		</div>
<!--  -->



<!-- Services -->
	@include('includes.services-includes')
<!-- //Services -->



		
		<!-- Services iconic -->
		@include('includes.iconicServices-includes')
		<!-- //Services iconic -->
		

		<!--  Fleet Carousel -->

		@include('includes.ourfleet-includes')

		<!-- Fleet Carousel -->




		
		
	</main>

@push("scripts")
<script src=" {{ asset('assets/js/jquery-ui-timepicker-addon.min.js') }}"></script> 
<script src=" {{ asset('assets/js/carousel_fleet.js') }}"></script> 
@endpush

@endsection