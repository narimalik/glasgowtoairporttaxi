@extends('layouts.master')


@section('content')



<main class="main white" role="main">
		<!-- Intro -->
	<?php // include("includes/herobanner.php"); ?>
    <!-- @include('includes.herobanner-innerpage') -->

	<div class="keyvisual" style="margin-bottom:30px">
		<img src="{{ asset('assets/images/uploads/glasgowtoairporttaxi.png') }}" alt="">
	</div>
		<!-- //Intro -->
		



		<div class="wrap">
			<div class="row">
				
				<!--- Content -->
				<div class="full-width content textongrey">
					<h2>Send us a message</h2>
					<p>Looking for reliable, professional and punctual private hire services in Glasgow and the surrounding areas? Our team is available 24 hours a day, 7 days a week 
						to assist with all your travel needs. Whether you require an airport transfer, executive chauffeur service, corporate transport solution or local city taxi, we are always ready to help.</p>
					<p>Booking your journey is simple and fast. Our friendly team is available around the clock to answer your queries, provide quotes and confirm your reservation.</p>


				</div>
				<!--- //Content -->
				


				
				<!-- Form -->
				<div class="three-fourth">

					

					@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
					@endif


					<form method="post" action="{{ url('contactusprocess')}}" >
						@csrf
						<input name="subject" type="hidden" id="subject" value="Glasgowtoairporttaxi: Contact us Enquiry">
						<div id="message"></div>
						<div class="f-row">
							<div class="one-half">
								<label for="name">Name</label>
								<input name="name" type="text" id="name" required>
							</div>
							<div class="one-half">
								<label for="email">Email address</label>
								<input name="email" type="email" id="email" required>
							</div>
						</div>
						<div class="f-row">
							<div class="full-width">
								<label for="comments">Message</label>
								<textarea name="comments" required></textarea>
							</div>
						</div>
						<div class="f-row">
							<input type="submit" value="Submit" id="submit" name="submit" class="btn color medium right">
						</div>
					</form>
				</div>
				<!-- //Form -->
				
				<!--- Sidebar -->
				<aside class="one-fourth sidebar right">
					<!-- Widget -->
					<div class="widget">
						<h4>Need help booking?</h4>
						<div class="textwidget">
							<p>Call our customer services team on the number below to speak to one of our advisors who will help you with all of your needs.</p>
							<p class="contact-data"><span class="icon icon-themeenergy_call black"></span> {{env('BOOKING_PHONENUMBER')}}</p>
						</div>
					</div>
					<!-- //Widget -->
					
					<!-- Widget -->
					
					<!-- <div class="widget">
						<h4>Advertisment</h4>
						<a href="#"><img src="images/uploads/advertisment.jpg" alt=""></a>
					</div> -->

					<!-- //Widget -->
				</aside>
				<!--- //Sidebar -->
			</div>
		</div>

		





		
		
</main>

@push("scripts")
<script src=" {{ asset('assets/js/jquery-ui-timepicker-addon.min.js') }}"></script> 

@endpush

@endsection