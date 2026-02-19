@extends('layouts.master')


@section('content')



@push("styles")
	<link href="{{ asset('assets/css/carousel_fleet.css') }}" rel="stylesheet">
@endpush

<main class="main white" role="main">
		<!-- Intro -->
	<?php // include("includes/herobanner.php"); ?>
    @include('includes.herobanner')
		<!-- //Intro -->
		
		

		
		<!-- Services iconic -->
		@include('includes.iconicServices-includes')
		<!-- //Services iconic -->
		
		
		
		<!-- Services -->
		@include('includes.services-includes')
		<!-- //Services -->
		
	
		<!-- Time and Miles -->
		
		@include('includes.timeandmiles')
		 </div>
		<!--  -->




		<!--  Fleet Carousel -->		
		@include('includes.ourfleet-includes')
		<!-- Fleet Carousel -->



		<!-- FAQs -->

		@include('includes.faqs-includes')

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

@endpush

@endsection