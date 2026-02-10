@extends('layouts.master')


@section('content')



@push("styles")
	<link href="{{ asset('assets/css/carousel_fleet.css') }}" rel="stylesheet">
@endpush

<main class="main" role="main">
		<!-- Intro -->
	<?php // include("includes/herobanner.php"); ?>
    @include('includes.herobanner')
		<!-- //Intro -->
		
		<!-- Search -->
		<div class="advanced-search color" id="booking">
			<div class="wrap">
				<form role="form" action="search-results.html" method="post">
					<!-- Row -->
					<div class="f-row">
						<div class="form-group datepicker one-third">
							<label for="dep-date">Departure date and time</label>
							<input type="text" id="dep-date" />
						</div>
						<div class="form-group select one-third">
							<label>Pick up location</label>
							<select>
								<option selected>&nbsp;</option>
								<optgroup label="Germany">
									<option value="Berlin Central Train Station">Berlin Central Train Station</option>
									<option value="Berlin Schonefeld Airport">Berlin Schonefeld Airport</option>
									<option value="Berlin Tegel Airport">Berlin Tegel Airport</option>
									<option value="Bremen Airport">Bremen Airport</option>
									<option value="Cologne Bonn Airport">Cologne Bonn Airport</option>
									<option value="Dortmund Airport">Dortmund Airport</option>
									<option value="Dresden Airport">Dresden Airport</option>
									<option value="Dusseldorf Airport">Dusseldorf Airport</option>
									<option value="Frankfurt Hahn Airport">Frankfurt Hahn Airport</option>
									<option value="Frankfurt International Airport">Frankfurt International Airport</option>
									<option value="Friedrichshafen Airport">Friedrichshafen Airport</option>
									<option value="Hamburg Finkenwerder Airport">Hamburg Finkenwerder Airport</option>
									<option value="Hamburg Port">Hamburg Port</option>
									<option value="Hamburg-Fuhlsbuttel Airport">Hamburg-Fuhlsbuttel Airport</option>
									<option value="Hanover Lengenhagen Airport">Hanover Lengenhagen Airport</option>
									<option value="Kiel Port">Kiel Port</option>
									<option value="Leipzig Halle Airport">Leipzig Halle Airport</option>
									<option value="Munich Airport">Munich Airport</option>
									<option value="Nuremberg Airport">Nuremberg Airport</option>
								</optgroup>
								<optgroup label="Italy">
									<option value="Alghero Airport">Alghero Airport</option>
									<option value="Bari Airport">Bari Airport</option>
									<option value="Bari Port">Bari Port</option>
									<option value="Bergamo Airport">Bergamo Airport</option>
									<option value="Bologna Airport">Bologna Airport</option>
									<option value="Brindisi Airport">Brindisi Airport</option>
									<option value="Cagliari Airport">Cagliari Airport</option>
									<option value="Florence Airport">Florence Airport</option>
									<option value="Florence Train Station">Florence Train Station</option>
									<option value="Genoa Airport">Genoa Airport</option>
									<option value="Genoa Port">Genoa Port</option>
									<option value="Milan Central Train Station">Milan Central Train Station</option>
									<option value="Milan City Centre">Milan City Centre</option>
									<option value="Naples Airport">Naples Airport</option>
								</optgroup>
								<optgroup label="Spain">
									<option value="Alicante Airport">Alicante Airport</option>
									<option value="Almeria Airport">Almeria Airport</option>
									<option value="Barcelona Airport">Barcelona Airport</option>
									<option value="Granada Airport">Granada Airport</option>
									<option value="Jerez de la Frontera">Jerez de la Frontera</option>
									<option value="Leon Airport">Leon Airport</option>
									<option value="Madrid Atocha Train Station">Madrid Atocha Train Station</option>
									<option value="Madrid Barajas Airport">Madrid Barajas Airport</option>
									<option value="Pamplona Airport">Pamplona Airport</option>
									<option value="Santander Airport">Santander Airport</option>
									<option value="Seville Airport">Seville Airport</option>
									<option value="Valencia Airport">Valencia Airport</option>
									<option value="Zaragoza Airport">Zaragoza Airport</option>
								</optgroup>
								<optgroup label="United Kingdom">
									<option value="Belfast City Airport">Belfast City Airport</option>
									<option value="Belfast International Airport">Belfast International Airport</option>
									<option value="Bristol Airport">Bristol Airport</option>
									<option value="Cardiff Airport">Cardiff Airport</option>
									<option value="Edinburgh Airport">Edinburgh Airport</option>
									<option value="Glasgow International Airport">Glasgow International Airport</option>
									<option value="London City Airport">London City Airport</option>
									<option value="London Gatwick Airport">London Gatwick Airport</option>
									<option value="London Heathrow Airport">London Heathrow Airport</option>
									<option value="London Stansted Airport">London Stansted Airport</option>
									<option value="Manchester Airport">Manchester Airport</option>
									<option value="Southampton Airport">Southampton Airport</option>
								</optgroup>
							</select>
						</div>
						<div class="form-group select one-third">
							<label>Drop off location</label>
							<select>
								<option selected>&nbsp;</option>
								<optgroup label="Germany">
									<option value="Berlin Central Train Station">Berlin Central Train Station</option>
									<option value="Berlin Schonefeld Airport">Berlin Schonefeld Airport</option>
									<option value="Berlin Tegel Airport">Berlin Tegel Airport</option>
									<option value="Bremen Airport">Bremen Airport</option>
									<option value="Cologne Bonn Airport">Cologne Bonn Airport</option>
									<option value="Dortmund Airport">Dortmund Airport</option>
									<option value="Dresden Airport">Dresden Airport</option>
									<option value="Dusseldorf Airport">Dusseldorf Airport</option>
									<option value="Frankfurt Hahn Airport">Frankfurt Hahn Airport</option>
									<option value="Frankfurt International Airport">Frankfurt International Airport</option>
									<option value="Friedrichshafen Airport">Friedrichshafen Airport</option>
									<option value="Hamburg Finkenwerder Airport">Hamburg Finkenwerder Airport</option>
									<option value="Hamburg Port">Hamburg Port</option>
									<option value="Hamburg-Fuhlsbuttel Airport">Hamburg-Fuhlsbuttel Airport</option>
									<option value="Hanover Lengenhagen Airport">Hanover Lengenhagen Airport</option>
									<option value="Kiel Port">Kiel Port</option>
									<option value="Leipzig Halle Airport">Leipzig Halle Airport</option>
									<option value="Munich Airport">Munich Airport</option>
									<option value="Nuremberg Airport">Nuremberg Airport</option>
								</optgroup>
								<optgroup label="Italy">
									<option value="Alghero Airport">Alghero Airport</option>
									<option value="Bari Airport">Bari Airport</option>
									<option value="Bari Port">Bari Port</option>
									<option value="Bergamo Airport">Bergamo Airport</option>
									<option value="Bologna Airport">Bologna Airport</option>
									<option value="Brindisi Airport">Brindisi Airport</option>
									<option value="Cagliari Airport">Cagliari Airport</option>
									<option value="Florence Airport">Florence Airport</option>
									<option value="Florence Train Station">Florence Train Station</option>
									<option value="Genoa Airport">Genoa Airport</option>
									<option value="Genoa Port">Genoa Port</option>
									<option value="Milan Central Train Station">Milan Central Train Station</option>
									<option value="Milan City Centre">Milan City Centre</option>
									<option value="Naples Airport">Naples Airport</option>
								</optgroup>
								<optgroup label="Spain">
									<option value="Alicante Airport">Alicante Airport</option>
									<option value="Almeria Airport">Almeria Airport</option>
									<option value="Barcelona Airport">Barcelona Airport</option>
									<option value="Granada Airport">Granada Airport</option>
									<option value="Jerez de la Frontera">Jerez de la Frontera</option>
									<option value="Leon Airport">Leon Airport</option>
									<option value="Madrid Atocha Train Station">Madrid Atocha Train Station</option>
									<option value="Madrid Barajas Airport">Madrid Barajas Airport</option>
									<option value="Pamplona Airport">Pamplona Airport</option>
									<option value="Santander Airport">Santander Airport</option>
									<option value="Seville Airport">Seville Airport</option>
									<option value="Valencia Airport">Valencia Airport</option>
									<option value="Zaragoza Airport">Zaragoza Airport</option>
								</optgroup>
								<optgroup label="United Kingdom">
									<option value="Belfast City Airport">Belfast City Airport</option>
									<option value="Belfast International Airport">Belfast International Airport</option>
									<option value="Bristol Airport">Bristol Airport</option>
									<option value="Cardiff Airport">Cardiff Airport</option>
									<option value="Edinburgh Airport">Edinburgh Airport</option>
									<option value="Glasgow International Airport">Glasgow International Airport</option>
									<option value="London City Airport">London City Airport</option>
									<option value="London Gatwick Airport">London Gatwick Airport</option>
									<option value="London Heathrow Airport">London Heathrow Airport</option>
									<option value="London Stansted Airport">London Stansted Airport</option>
									<option value="Manchester Airport">Manchester Airport</option>
									<option value="Southampton Airport">Southampton Airport</option>
								</optgroup>
							</select>
						</div>
					</div>
					<!-- //Row -->
					
					<!-- Row -->
					<div class="f-row">
						<div class="form-group datepicker one-third">
							<label for="ret-date">Return date and time</label>
							<input type="text" id="ret-date" />
						</div>
						<div class="form-group select one-third">
							<label>Pick up location</label>
							<select>
								<option selected>&nbsp;</option>
								<optgroup label="Germany">
									<option value="Berlin Central Train Station">Berlin Central Train Station</option>
									<option value="Berlin Schonefeld Airport">Berlin Schonefeld Airport</option>
									<option value="Berlin Tegel Airport">Berlin Tegel Airport</option>
									<option value="Bremen Airport">Bremen Airport</option>
									<option value="Cologne Bonn Airport">Cologne Bonn Airport</option>
									<option value="Dortmund Airport">Dortmund Airport</option>
									<option value="Dresden Airport">Dresden Airport</option>
									<option value="Dusseldorf Airport">Dusseldorf Airport</option>
									<option value="Frankfurt Hahn Airport">Frankfurt Hahn Airport</option>
									<option value="Frankfurt International Airport">Frankfurt International Airport</option>
									<option value="Friedrichshafen Airport">Friedrichshafen Airport</option>
									<option value="Hamburg Finkenwerder Airport">Hamburg Finkenwerder Airport</option>
									<option value="Hamburg Port">Hamburg Port</option>
									<option value="Hamburg-Fuhlsbuttel Airport">Hamburg-Fuhlsbuttel Airport</option>
									<option value="Hanover Lengenhagen Airport">Hanover Lengenhagen Airport</option>
									<option value="Kiel Port">Kiel Port</option>
									<option value="Leipzig Halle Airport">Leipzig Halle Airport</option>
									<option value="Munich Airport">Munich Airport</option>
									<option value="Nuremberg Airport">Nuremberg Airport</option>
								</optgroup>
								<optgroup label="Italy">
									<option value="Alghero Airport">Alghero Airport</option>
									<option value="Bari Airport">Bari Airport</option>
									<option value="Bari Port">Bari Port</option>
									<option value="Bergamo Airport">Bergamo Airport</option>
									<option value="Bologna Airport">Bologna Airport</option>
									<option value="Brindisi Airport">Brindisi Airport</option>
									<option value="Cagliari Airport">Cagliari Airport</option>
									<option value="Florence Airport">Florence Airport</option>
									<option value="Florence Train Station">Florence Train Station</option>
									<option value="Genoa Airport">Genoa Airport</option>
									<option value="Genoa Port">Genoa Port</option>
									<option value="Milan Central Train Station">Milan Central Train Station</option>
									<option value="Milan City Centre">Milan City Centre</option>
									<option value="Naples Airport">Naples Airport</option>
								</optgroup>
								<optgroup label="Spain">
									<option value="Alicante Airport">Alicante Airport</option>
									<option value="Almeria Airport">Almeria Airport</option>
									<option value="Barcelona Airport">Barcelona Airport</option>
									<option value="Granada Airport">Granada Airport</option>
									<option value="Jerez de la Frontera">Jerez de la Frontera</option>
									<option value="Leon Airport">Leon Airport</option>
									<option value="Madrid Atocha Train Station">Madrid Atocha Train Station</option>
									<option value="Madrid Barajas Airport">Madrid Barajas Airport</option>
									<option value="Pamplona Airport">Pamplona Airport</option>
									<option value="Santander Airport">Santander Airport</option>
									<option value="Seville Airport">Seville Airport</option>
									<option value="Valencia Airport">Valencia Airport</option>
									<option value="Zaragoza Airport">Zaragoza Airport</option>
								</optgroup>
								<optgroup label="United Kingdom">
									<option value="Belfast City Airport">Belfast City Airport</option>
									<option value="Belfast International Airport">Belfast International Airport</option>
									<option value="Bristol Airport">Bristol Airport</option>
									<option value="Cardiff Airport">Cardiff Airport</option>
									<option value="Edinburgh Airport">Edinburgh Airport</option>
									<option value="Glasgow International Airport">Glasgow International Airport</option>
									<option value="London City Airport">London City Airport</option>
									<option value="London Gatwick Airport">London Gatwick Airport</option>
									<option value="London Heathrow Airport">London Heathrow Airport</option>
									<option value="London Stansted Airport">London Stansted Airport</option>
									<option value="Manchester Airport">Manchester Airport</option>
									<option value="Southampton Airport">Southampton Airport</option>
								</optgroup>
							</select>
						</div>
						<div class="form-group select one-third">
							<label>Drop off location</label>
							<select>
								<option selected>&nbsp;</option>
								<optgroup label="Germany">
									<option value="Berlin Central Train Station">Berlin Central Train Station</option>
									<option value="Berlin Schonefeld Airport">Berlin Schonefeld Airport</option>
									<option value="Berlin Tegel Airport">Berlin Tegel Airport</option>
									<option value="Bremen Airport">Bremen Airport</option>
									<option value="Cologne Bonn Airport">Cologne Bonn Airport</option>
									<option value="Dortmund Airport">Dortmund Airport</option>
									<option value="Dresden Airport">Dresden Airport</option>
									<option value="Dusseldorf Airport">Dusseldorf Airport</option>
									<option value="Frankfurt Hahn Airport">Frankfurt Hahn Airport</option>
									<option value="Frankfurt International Airport">Frankfurt International Airport</option>
									<option value="Friedrichshafen Airport">Friedrichshafen Airport</option>
									<option value="Hamburg Finkenwerder Airport">Hamburg Finkenwerder Airport</option>
									<option value="Hamburg Port">Hamburg Port</option>
									<option value="Hamburg-Fuhlsbuttel Airport">Hamburg-Fuhlsbuttel Airport</option>
									<option value="Hanover Lengenhagen Airport">Hanover Lengenhagen Airport</option>
									<option value="Kiel Port">Kiel Port</option>
									<option value="Leipzig Halle Airport">Leipzig Halle Airport</option>
									<option value="Munich Airport">Munich Airport</option>
									<option value="Nuremberg Airport">Nuremberg Airport</option>
								</optgroup>
								<optgroup label="Italy">
									<option value="Alghero Airport">Alghero Airport</option>
									<option value="Bari Airport">Bari Airport</option>
									<option value="Bari Port">Bari Port</option>
									<option value="Bergamo Airport">Bergamo Airport</option>
									<option value="Bologna Airport">Bologna Airport</option>
									<option value="Brindisi Airport">Brindisi Airport</option>
									<option value="Cagliari Airport">Cagliari Airport</option>
									<option value="Florence Airport">Florence Airport</option>
									<option value="Florence Train Station">Florence Train Station</option>
									<option value="Genoa Airport">Genoa Airport</option>
									<option value="Genoa Port">Genoa Port</option>
									<option value="Milan Central Train Station">Milan Central Train Station</option>
									<option value="Milan City Centre">Milan City Centre</option>
									<option value="Naples Airport">Naples Airport</option>
								</optgroup>
								<optgroup label="Spain">
									<option value="Alicante Airport">Alicante Airport</option>
									<option value="Almeria Airport">Almeria Airport</option>
									<option value="Barcelona Airport">Barcelona Airport</option>
									<option value="Granada Airport">Granada Airport</option>
									<option value="Jerez de la Frontera">Jerez de la Frontera</option>
									<option value="Leon Airport">Leon Airport</option>
									<option value="Madrid Atocha Train Station">Madrid Atocha Train Station</option>
									<option value="Madrid Barajas Airport">Madrid Barajas Airport</option>
									<option value="Pamplona Airport">Pamplona Airport</option>
									<option value="Santander Airport">Santander Airport</option>
									<option value="Seville Airport">Seville Airport</option>
									<option value="Valencia Airport">Valencia Airport</option>
									<option value="Zaragoza Airport">Zaragoza Airport</option>
								</optgroup>
								<optgroup label="United Kingdom">
									<option value="Belfast City Airport">Belfast City Airport</option>
									<option value="Belfast International Airport">Belfast International Airport</option>
									<option value="Bristol Airport">Bristol Airport</option>
									<option value="Cardiff Airport">Cardiff Airport</option>
									<option value="Edinburgh Airport">Edinburgh Airport</option>
									<option value="Glasgow International Airport">Glasgow International Airport</option>
									<option value="London City Airport">London City Airport</option>
									<option value="London Gatwick Airport">London Gatwick Airport</option>
									<option value="London Heathrow Airport">London Heathrow Airport</option>
									<option value="London Stansted Airport">London Stansted Airport</option>
									<option value="Manchester Airport">Manchester Airport</option>
									<option value="Southampton Airport">Southampton Airport</option>
								</optgroup>
							</select>
						</div>
					</div>
					<!-- //Row -->
					
					<!-- Row -->
					<div class="f-row">
						<div class="form-group spinner">
							<label for="people">How many people <small>(including children)</small>?</label>
							<input type="number" id="people" min="1"  />
						</div>
						<div class="form-group radios">
							<div>
								<input type="radio" name="radio" id="return" value="return" />
								<label for="return">Return</label>
							</div>
							<div>
								<input type="radio" name="radio" id="oneway" value="oneway" checked />
								<label for="oneway">One way</label>
							</div>
						</div>
						<div class="form-group right">
							<button type="submit" class="btn large black">Find a transfer</button>
						</div>
					</div>
					<!--// Row -->
				</form>
			</div>
		</div>
		<!-- //Search -->
		
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



		<!--  -->

		<section class="card-section center white">
		<div class="card-row center">	
			<div class="card">					

				<div class="left">
					<span class="icon-svg">
						<svg aria-hidden="true" class="e-font-icon-svg e-fas-map-marker-alt" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
						</svg>				
					</span>				
				</div>
				<div class="right">
					<span class="title">Glasgow City -> Glasgow Airport.</span>
					<p >10 min – 20 min / 7 Miles</p>
				</div>
				
			</div>

			<div class="card">					

				<div class="left">
					<span class="icon-svg">
						<svg aria-hidden="true" class="e-font-icon-svg e-fas-map-marker-alt" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
						</svg>				
					</span>				
				</div>
				<div class="right">
					<span class="title">Glasgow City -> Glasgow Airport.</span>
					<p >10 min – 20 min / 7 Miles</p>
				</div>
				
			</div>


			<div class="card">					

				<div class="left">
					<span class="icon-svg">
						<svg aria-hidden="true" class="e-font-icon-svg e-fas-map-marker-alt" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
						</svg>				
					</span>				
				</div>
				<div class="right">
					<span class="title">Glasgow City -> Glasgow Airport.</span>
					<p >10 min – 20 min / 7 Miles</p>
				</div>
				
			</div>

			
		</div>

		</section>
		<!--  -->




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