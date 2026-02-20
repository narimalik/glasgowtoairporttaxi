@push("styles")
	
	<link href="{{ asset('assets/css/carousel_services.css') }}" rel="stylesheet">
@endpush

<div class="carousel js-carousel white">
		<h2 class="fleet-title">Our Services</h2>
			<div class="carousel-track">
				<div class="slide">
					<img src="{{ asset('assets/images/airporttransfer_service.png')}}" alt="" />
					<h3>Airport Transfer</h3>
					<p>Our airport transfer service is designed to take the stress out of travel. We provide reliable transfers to and from all major airports,
						 ensuring you arrive on time and travel in comfort. Whether you are catching an early-morning flight or arriving late at night, our 
						 professional drivers are always punctual and prepared. We monitor flight schedules to accommodate delays or early arrivals, offering
						  a smooth and efficient pickup experience. With spacious, luxury vehicles and assistance with luggage, our airport transfers are ideal 
						  for business travellers, families, and leisure passengers alike.</p>
					<a href="{{ url('booking')}}"><button>Book Now</button></a>
				</div>

				<div class="slide">
					<img src="{{ asset('assets/images/taxi_service.png')}}" alt="" />
					<h3>Taxi Service</h3>
					<p>For everyday travel, our city taxi service provides a reliable and comfortable alternative to standard taxis. Whether you are heading to work, 
						attending an appointment, or travelling across the city, we offer prompt pickups and efficient routes to get you where you need to be. Our 
						vehicles are always clean, modern, and well-maintained, ensuring a comfortable ride for short or long journeys. With professional drivers 
						and transparent service, our city taxi option combines convenience with executive-level comfort.</p>
						<a href="{{ url('booking')}}"><button>Book Now</button></a>
				</div>

				<div class="slide">
					<img src="{{ asset('assets/images/chauffeur_service.png')}}" alt="" />
					<h3>Chauffeur Service</h3>
					<p>Our chauffeur service offers a refined and professional travel experience for clients who value comfort, discretion, and reliability. 
						Perfect for business meetings, executive travel, VIP guests, and special occasions, our chauffeurs provide a calm and polished service 
						from start to finish. Travelling in one of our new luxury cars allows you to relax, focus on your work, or enjoy the journey while we 
						handle the driving. Each chauffeur is experienced, courteous, and committed to delivering a first-class service tailored to your 
						schedule and requirements.</p>
						<a href="{{ url('booking')}}"><button>Book Now</button></a>
				</div>

				<div class="slide">
					<img src="{{ asset('assets/images/corporate_transfer_service.png')}}" alt="" />
					<h3>Corporate Transfer</h3>
					<p>Our corporate transfer solutions are designed to support businesses with professional, efficient, and dependable transport services. 
						We work with companies of all sizes to provide transport for executives, employees, clients, and visiting guests. From daily business 
						travel to airport transfers and corporate events, our service reflects professionalism and reliability. Our luxury vehicles help create 
						a positive impression, while our punctual service ensures schedules are maintained without disruption.</p>
						<a href="{{ url('booking')}}"><button>Book Now</button></a>
					
				</div>

			</div>
		</div>



		@push("scripts")

<script src=" {{ asset('assets/js/carousel_services.js') }}"></script> 

<script>
	/* init all carousels on page */
	document.querySelectorAll('.js-carousel').forEach(initCarousel);
</script> 
@endpush