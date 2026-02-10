@extends('layouts.master')


@section('content')



@push("styles")
	<link href="{{ asset('assets/css/carousel_fleet.css') }}" rel="stylesheet">
@endpush

<main class="main" role="main">
		<!-- Intro -->
	<?php // include("includes/herobanner.php"); ?>
    @include('includes.herobanner-innerpage')
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
<div class="services boxed white" id="services">
			<!-- Item -->
			<article class="one-fourth wow fadeIn">
				<figure class="featured-image">
					<img src="{{ asset('assets/images/uploads/img2.jpg')}}" alt="" />
					<div class="overlay">
						<a href="services.html" class="expand">+</a>
					</div>
				</figure>
				<div class="details">
					<h4><a href="services.html">Glasgow Airport transfers</a></h4>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
					<a class="more" title="Read more" href="services.html">Read more</a>
				</div>
			</article>
			<!-- //Item -->
			
			<!-- Item -->
			<article class="one-fourth wow fadeIn" data-wow-delay=".2s">
				<figure class="featured-image">
					<img src="{{ asset('assets/images/uploads/img2.jpg') }}" alt="" />
					<div class="overlay">
						<a href="services.html" class="expand">+</a>
					</div>
				</figure>
				<div class="details">
					<h4><a href="services.html">Edinburgh Airport Transfer</a></h4>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
					<a class="more" title="Read more" href="services.html">Read more</a>
				</div>
			</article>
			<!-- //Item -->
			
			<!-- Item -->
			<article class="one-fourth wow fadeIn" data-wow-delay=".4s">
				<figure class="featured-image">
					<img src="{{ asset('assets/images/uploads/img2.jpg') }}" alt="" />
					<div class="overlay">
						<a href="services.html" class="expand">+</a>
					</div>
				</figure>
				<div class="details">
					<h4><a href="services.html">Prestwick Airport</a></h4>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
					<a class="more" title="Read more" href="services.html">Read more</a>
				</div>
			</article>
			<!-- //Item -->
			
			<!-- Item -->
			<article class="one-fourth wow fadeIn" data-wow-delay=".6s">
				<figure class="featured-image">
					<img src="{{ asset('assets/images/uploads/img2.jpg') }}" alt="" />
					<div class="overlay">
						<a href="services.html" class="expand">+</a>
					</div>
				</figure>
				<div class="details">
					<h4><a href="services.html">Taxi service</a></h4>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
					<a class="more" title="Read more" href="services.html">Read more</a>
				</div>
			</article>
			<!-- //Item -->			
		</div>
		<!-- //Services -->



		
		<!-- Services iconic -->
		<div class="services iconic white">
			<div class="wrap">
				<div class="row">
					<!-- Item -->
					<div class="one-third wow fadeIn">
						<span class="circle"><span class="icon  icon-themeenergy_savings"></span></span>
						<h3>Fixed rates</h3>
						<p>Enjoy safe and comfortable pre fixed rides with professional drivers.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".2s">
						<span class="circle"><span class="icon icon-themeenergy_lockpad"></span></span>
						<h3>Reliable transfers</h3>
						<p>Reliable and comfortable rides with professional drivers. Safe door-to-door transfers you can trust, every time.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".4s">
						<span class="circle"><span class="icon icon-themeenergy_open-wallet"></span></span>
						<h3>No booking fees</h3>
						<p>Book your ride with zero extra charges. Simple pricing with no hidden costs.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn">
						<span class="circle"><span class="icon icon-themeenergy_heart"></span></span>
						<h3>Free cancellation</h3>
						<p>Cancel anytime with no extra charges. Flexible rides with no hidden penalties.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".2s">
						<span class="circle"><span class="icon icon-themeenergy_magic-trick"></span></span>
						<h3>Booking flexibility</h3>
						<p>Schedule now or book last-minute, anytime you need. Update your pickup time or location quickly and hassle-free.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".4s">
						<span class="circle"><span class="icon icon-themeenergy_call"></span></span>
						<h3>24h customer service</h3>
						<p>We’re always here to help, day or night. Fast responses for bookings, changes, and enquiries.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn">
						<span class="circle"><span class="icon icon-themeenergy_cup"></span></span>
						<h3>Award winning service</h3>
						<p>Trusted by customers for quality and reliability. Professional drivers and top-rated support every time.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".2s">
						<span class="circle"><span class="icon icon-themeenergy_attach"></span></span>
						<h3>Benefits for partners</h3>
						<p>Earn more with regular bookings and reliable payments. Get priority jobs, support, and long-term business opportunities.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".4s">
						<span class="circle"><span class="icon icon-themeenergy_stars"></span></span>
						<h3>Quality vehicles</h3>
						<p>Clean, modern cars for a smooth and comfortable ride. Well-maintained vehicles to make every journey better.</p>
					</div>
					<!-- //Item -->
				</div>
			</div>
		</div>
		<!-- //Services iconic -->
		
		
		
		
		
		<!-- Testimonials -->
		<!-- <div class="testimonials center black">
			<div class="wrap">
				<h6 class="wow fadeInDown"><i class="fa fa-quote-left"></i>Wow, this theme is outstanding!</h6>
				<p class="wow fadeInUp">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				<p class="meta wow fadeInUp">-John Doe, themeforest</p>
			</div>
		</div> -->
		<!-- //Testimonials -->




		<!--  Fleet Carousel -->

		<section class="fleet-section white">
			<h2 class="fleet-title">Our Fleet</h2>

			<div class="fleet-slider">
				<div class="fleet-track" id="fleetTrack">

				<!-- Slide 1 -->
				<div class="fleet-card">
					<img src="{{ asset('assets/images/saloon-car.jpg')}}" alt="" />
					<!-- <img src="saloon-car.jpg" alt="Saloon Car"> -->
					<h3>Saloon Car</h3>
					<p>Comfortable ride for up to 3 passengers with luggage.</p>
					<a href="#" class="fleet-btn">Book Now</a>
				</div>

				<!-- Slide 2 -->
				<div class="fleet-card">
					
					<img src="{{ asset('assets/images/executive-car.jpg')}}" alt="" />
					<h3>Executive Car</h3>
					<p>Premium executive travel for business and airport transfers.</p>
					<a href="#" class="fleet-btn">Book Now</a>
				</div>

				<!-- Slide 3 -->
				<div class="fleet-card">
					<!-- <img src="Executive-Minibus.jpg" alt="Executive Minibus"> -->
					<img src="{{ asset('assets/images/Executive-Minibus.jpg')}}" alt="" />
					<h3>Executive Minibus</h3>
					<p>Perfect for groups up to 7 passengers with luggage space.</p>
					<a href="#" class="fleet-btn">Book Now</a>
				</div>

				<!-- Slide 4 -->
				<div class="fleet-card">
					
					<img src="{{ asset('assets/images/Estate-Car.jpg')}}" alt="" />
					<h3>Estate Car</h3>
					<p>Extra boot space for airport luggage and long-distance trips.</p>
					<a href="#" class="fleet-btn">Book Now</a>
				</div>

				</div>
			</div>

			<!-- Dots -->
			<div class="fleet-dots" id="fleetDots"></div>
		</section>

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



		




<!-- 		
		<div class="partners white center">
			<div class="wrap">
				<h2 class="wow fadeIn">Our partners</h2>
				<div class="one-fifth wow fadeIn"><a href="#"><img src="{{ asset('assets/images/uploads/logo1.jpg') }}" alt="" /></a></div>
				<div class="one-fifth wow fadeIn" data-wow-delay=".2s"><a href="#"><img src="{{ asset('assets/images/uploads/logo2.jpg') }}" alt="" /></a></div>
				<div class="one-fifth wow fadeIn" data-wow-delay=".4s"><a href="#"><img src=" {{ asset('assets/images/uploads/logo3.jpg') }} " alt="" /></a></div>
				<div class="one-fifth wow fadeIn" data-wow-delay=".6s"><a href="#"><img src="{{ asset('assets/images/uploads/logo4.jpg') }}" alt="" /></a></div>
				<div class="one-fifth" data-wow-delay=".8s"><a href="#"><img src="{{ asset('assets/images/uploads/logo5.jpg') }}" alt="" /></a></div>
			</div>
		</div> -->
		
		
		<!-- Call to action -->
		<!-- <div class="color cta">
			<div class="wrap">
				<p class="wow fadeInLeft">Like what you see? Are you ready to stand out? You know what to do.</p>
				<a href="http://themeforest.net/item/transfers-transport-and-car-hire-html-template/9366018?ref=themeenergy" class="btn huge black right wow fadeInRight">Purchase theme</a>
			</div>
		</div> -->
		<!-- //Call to action -->
	</main>

@push("scripts")
<script src=" {{ asset('assets/js/jquery-ui-timepicker-addon.min.js') }}"></script> 
<script src=" {{ asset('assets/js/carousel_fleet.js') }}"></script> 
@endpush

@endsection