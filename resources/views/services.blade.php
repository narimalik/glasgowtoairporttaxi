@extends('layouts.master')


@section('content')



@push("styles")
	<link href="{{ asset('assets/css/carousel_fleet.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/carousel_services.css') }}" rel="stylesheet">
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
					<p>
						We provide professional, reliable, and luxury transport services designed to meet the needs of both private and corporate clients. 
						Operating with a modern fleet of new, luxury vehicles, we are committed to delivering comfort, punctuality, and a premium travel experience across every journey.
						Whether you require a dependable airport transfer, a professional chauffeur service, or stylish transport for a special event, our services are tailored to offer convenience, safety, and peace of mind. Available 24/7, we proudly serve the city and surrounding areas with high standards of service and attention to detail.
					</p>

					<p>
						Our airport transfer service is designed to take the stress out of travel. We provide reliable transfers to and from all major airports, ensuring you arrive on time and travel in comfort. Whether you are catching an early-morning flight or arriving late at night, our professional drivers are always punctual and prepared.
						We monitor flight schedules to accommodate delays or early arrivals, offering a smooth and efficient pickup experience. With spacious, luxury vehicles and assistance with luggage, our airport transfers are ideal for business travellers, families, and leisure passengers alike.
					</p>

					<p>
						Our chauffeur service offers a refined and professional travel experience for clients who value comfort, discretion, and reliability. Perfect for business meetings, executive travel, VIP guests, and special occasions, our chauffeurs provide a calm and polished service from start to finish.
						Travelling in one of our new luxury cars allows you to relax, focus on your work, or enjoy the journey while we handle the driving. Each chauffeur is experienced, courteous, and committed to delivering a first-class service tailored to your schedule and requirements.
					</p>

					<p>
						For everyday travel, our city taxi service provides a reliable and comfortable alternative to standard taxis. Whether you are heading to work, attending an appointment, or travelling across the city, we offer prompt pickups and efficient routes to get you where you need to be.
						Our vehicles are always clean, modern, and well-maintained, ensuring a comfortable ride for short or long journeys. With professional drivers and transparent service, our city taxi option combines convenience with executive-level comfort.
					</p>

					<p>
						Make your special occasions even better with our party and event travel service. We provide stylish and dependable transport for birthdays, weddings, nights out, concerts, and other celebrations. Our luxury vehicles allow you and your guests to travel together comfortably and arrive at your destination in style.
						By choosing our service, you can enjoy your event without worrying about parking, navigation, or designated drivers. We focus on punctuality, safety, and flexibility, ensuring your event transport runs smoothly from start to finish.
					</p>

					<p>
						Our corporate transfer solutions are designed to support businesses with professional, efficient, and dependable transport services. We work with companies of all sizes to provide transport for executives, employees, clients, and visiting guests.
						From daily business travel to airport transfers and corporate events, our service reflects professionalism and reliability. Our luxury vehicles help create a positive impression, while our punctual service ensures schedules are maintained without disruption.
					</p>

					

				</div>
				<!--- //Content -->
			</div>
		</div>
<!--  -->








		<!--  Services Carousel -->
		@include('includes.services-includes')

		<!-- Services Carousel -->






		<!-- Services iconic -->
		@include('includes.iconicServices-includes')
		<!-- //Services iconic -->




		<!--  Fleet Carousel -->

		@include('includes.ourfleet-includes')

		<!-- Fleet Carousel -->



		<!-- FAQs -->

		<section class="fleet-section white center">

				<h2 class="fleet-title">Before you book</h2>
				
					<dl class="faqs width-75">
						<!-- Item -->
						<dt class="">How do I make a booking on your website?</dt>
						<dd style="display: none;">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam <strong>nonummy nibh euismod</strong> tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
							<p>Duis autem vel eum iriure dolor in <a href="#">hendrerit in vulputate</a> velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</p>
						</dd>
						<!-- //Item -->
												
						
						<!-- Item -->
						<dt>I cannot find a route I want to book. What to do?</dt>
						<dd style="display: none;">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam <strong>nonummy nibh euismod</strong> tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
							<p>Duis autem vel eum iriure dolor in <a href="#">hendrerit in vulputate</a> velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</p>
						</dd>
						<!-- //Item -->
						
						<!-- Item -->
						<dt>How do I pay for my transfer?</dt>
						<dd style="display: none;">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam <strong>nonummy nibh euismod</strong> tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
							<p>Duis autem vel eum iriure dolor in <a href="#">hendrerit in vulputate</a> velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</p>
						</dd>
						<!-- //Item -->
						
						<!-- Item -->
						<dt>Can I book a transfer with more than one stop?</dt>
						<dd style="display: none;">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam <strong>nonummy nibh euismod</strong> tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
							<p>Duis autem vel eum iriure dolor in <a href="#">hendrerit in vulputate</a> velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</p>
						</dd>
						<!-- //Item -->
					</dl>
				
		

		</section>

		<!-- FAQS -->



		
	</main>

@push("scripts")
<script src=" {{ asset('assets/js/jquery-ui-timepicker-addon.min.js') }}"></script> 
<script src=" {{ asset('assets/js/carousel_fleet.js') }}"></script> 
<script src=" {{ asset('assets/js/carousel_services.js') }}"></script> 

<script>
	/* init all carousels on page */
	document.querySelectorAll('.js-carousel').forEach(initCarousel);
</script> 
@endpush

@endsection