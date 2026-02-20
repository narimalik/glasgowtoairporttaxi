@push("styles")
<link href="{{ asset('assets/css/carousel_fleet.css') }}" rel="stylesheet">
@endpush

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
					<a href="{{ url('booking')}}#" class="fleet-btn">Book Now</a>
				</div>

				<!-- Slide 2 -->
				<div class="fleet-card">
					
					<img src="{{ asset('assets/images/executive-car.jpg')}}" alt="" />
					<h3>Executive Car</h3>
					<p>Premium executive travel for business and airport transfers.</p>
					<a href="{{ url('booking')}}" class="fleet-btn">Book Now</a>
				</div>

				<!-- Slide 3 -->
				<div class="fleet-card">
					<!-- <img src="Executive-Minibus.jpg" alt="Executive Minibus"> -->
					<img src="{{ asset('assets/images/Executive-Minibus.jpg')}}" alt="" />
					<h3>Executive Minibus</h3>
					<p>Perfect for groups up to 7 passengers with luggage space.</p>
					<a href="{{ url('booking')}}" class="fleet-btn">Book Now</a>
				</div>

				<!-- Slide 4 -->
				<div class="fleet-card">
					
					<img src="{{ asset('assets/images/Estate-Car.jpg')}}" alt="" />
					<h3>Estate Car</h3>
					<p>Extra boot space for airport luggage and long-distance trips.</p>
					<a href="{{ url('booking')}}" class="fleet-btn">Book Now</a>
				</div>

				</div>
			</div>

			<!-- Dots -->
			<div class="fleet-dots" id="fleetDots"></div>
		</section>


@push("scripts")
<script src=" {{ asset('assets/js/carousel_fleet.js') }}"></script> 
@endpush