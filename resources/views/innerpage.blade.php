@extends('layouts.innerpage')

<!-- @section('title',"ddd") -->

@section('content')
<main class="main" role="main" >
		<!-- Page info -->
		<!-- <header class="site-title color">
			<div class="wrap">
				<div class="container">
					<h1>Tailor made</h1>
					<nav role="navigation" class="breadcrumbs">
						<ul>
							<li><a href="index.html" title="Home">Home</a></li>
							<li>Tailor made</li>
						</ul>
					</nav>
				</div>
			</div>
		</header> -->
		<!-- //Page info -->
		
		<div class="wrap">
			<div class="row">
				<!--- Content -->
				<div class="full-width content">
					<h2>Send inquiry for your custom made transfer</h2>
					<p>Here you can order a customized transfer that will be organized according to your wishes and demands.</p>
					<p>To receive an offer, please fill in the following inquiry form and make sure to describe the trip in detail. Specify the date and time of departure from the departure location, the date and time of the arrival to the final destination, all stopovers, their duration and any special requirements. Sending an inquiry does not oblige you to buy the service. You can make your decision after we send you a price offer.</p>
					<p><strong>Please note:</strong> if your trip has multiple journeys, please use the "Add leg" button.</p>
				</div>
				<!--- //Content -->
				
				<div class="three-fourth">
					<form>
						<header class="f-title color">Contact information</header>
						<div class="f-row">
							<div class="one-half">
								<label for="name">Name and surname</label>
								<input type="text" id="name" />
							</div>
							<div class="one-half">
								<label for="company">Company name</label>
								<input type="text" id="company" />
							</div>
						</div>
						<div class="f-row">
							<div class="one-half">
								<label for="number">Phone number</label>
								<input type="number" id="number" />
							</div>
							
							<div class="one-half">
								<label for="email">Email address</label>
								<input type="email" id="email" />
							</div>
						</div>
						
						<header class="f-title color">1. leg</header>
						
			
						<div class="f-row">
							<div class="one-third">
								<label for="dep-date">Pick up date and time</label>
								<input type="text" id="dep-date" />
							</div>
							<div class="one-sixth">
								<label for="passengers">passengers</label>
								<input type="number" id="passengers" min="1" />
							</div>
							<div class="one-half">
								<label for="vehicle">Select Vehicle type</label>
								<select id="vehicle">
									<option selected>Private car</option>
									<option>Private minivan</option>
									<option>Private coach</option>
									<option>Shared minivan</option>
									<option>Shared coach</option>
									<option>Private limousine</option>
									<option>Private helicopter</option>
								</select>
							</div>
						</div>
						<div class="f-row">
							<div class="one-half">
								<label for="pickuploc">Pick up location</label>
								<input type="text" id="pickuploc" />
							</div>
							<div class="one-half">
								<label for="dropoffloc">Drop off location</label>
								<input type="text" id="dropoffloc" />
							</div>
						</div>
						
						<div class="f-row">
							<div class="full-width">
								<label for="extras">Additional information <span>(E.g. flight number, airport terminal, ship name, child/booster seats etc.)</span></label>
								<textarea id="extras"></textarea>
							</div>
						</div>
						
						<div class="actions">
							<a href="#" class="btn medium back">Add a leg</a>
							<a href="#" class="btn medium back">Add return journey</a>
							<a href="#" class="btn medium color right">Submit request</a>
						</div>
					</form>
				</div>
				
				<!--- Sidebar -->
				<aside class="one-fourth sidebar right">
					<!-- Widget -->
					<div class="widget">
						<h4>Need help booking?</h4>
						<div class="textwidget">
							<p>Call our customer services team on the number below to speak to one of our advisors who will help you with all of your needs.</p>
							<p class="contact-data"><span class="icon icon-themeenergy_call black"></span> +1 555 555 555</p>
						</div>
					</div>
					<!-- //Widget -->
					
					<!-- Widget -->
					<div class="widget">
						<h4>Advertisment</h4>
						<a href="#"><img src="{{ asset('assets/images/uploads/advertisment.jpg')}}" alt="" /></a>
					</div>
					<!-- //Widget -->
					
					<!-- Widget -->
					<div class="widget">
						<h4>Why book with us?</h4>
						<div class="textwidget">
							<h5>Reliable and Safe</h5>
							<p>Lorem ipsum dolor sit amet,  do eiusmod tempor incididunt labore et dolore magna aliqua.</p>
							<h5>No hidden fees</h5>
							<p>Lorem ipsum dolor sit amet,  do eiusmod tempor incididunt labore et dolore magna aliqua.</p>
							<h5>We’re Always Here</h5>
							<p>Lorem ipsum dolor sit amet,  do eiusmod tempor incididunt labore et dolore magna aliqua.</p>
						</div>
					</div>
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