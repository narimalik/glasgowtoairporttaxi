<!DOCTYPE html>
<html>
   <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Transfers - Private Transport and Car Hire HTML Template" />
	<meta name="description" content="Transfers - Private Transport and Car Hire HTML Template">
	<meta name="author" content="themeenergy.com">
	
	<title> @yield('title', "Transfers - Home") </title>
	
<!--  -->
<?php // include("includes/header.php"); ?>
@include('includes.headerfiles')
@stack('styles')  <!-- It will include all css files from sub view files which are specific for that view.  -->
<!--  -->
	
  </head>
  
  <body class="home22">
		<!-- Preloader -->
		<div class="preloader">
			<div id="followingBallsG">
				<div id="followingBallsG_1" class="followingBallsG"></div>
				<div id="followingBallsG_2" class="followingBallsG"></div>
				<div id="followingBallsG_3" class="followingBallsG"></div>
				<div id="followingBallsG_4" class="followingBallsG"></div>
			</div>
		</div>
		<!-- //Preloader -->
		
		<!-- Header -->
		<?php //include("includes/topmenu.php"); ?>
		@include('includes.header')
        @include('includes.topmenu')
		<!-- //Header -->
	
	<!-- Main -->
	@yield('content')
	<!-- //Main -->
	
	<!-- Footer -->
<?php // include("includes/footer.php"); ?>

@include('includes.footer')
	<!-- //Footer -->
	
<?php // include("includes/javascriptfiles.php");?>	
@include('includes.javascriptfiles')

@stack('scripts')   <!-- will include all Js files pushed by a child view -->
  </body>
</html>