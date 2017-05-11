@extends('master')
@section('content')

<!-- breadcrumbs -->
<div class="breadcrumbs">
	<div class="container">
		<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
			<li><a href="{{url('home')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
			<li class="active">Make Up</li>
			@yield('makeupa')
			<!-- <li class="active">Face</li> -->
		</ol>
	</div>
</div>
<!-- //breadcrumbs -->


<div class="logo_products" style="padding:5em;padding-top:1em">
	<div class="container">
		<div class="col-md-1"></div>
		@yield('item')
		<div class="col-md-1"></div>
	</div>
</div>





<!-- //footer -->
<div class="footer">
	<div class="container">
		<div class="w3_footer_grids">
			<div class="col-md-3 w3_footer_grid">
				<h3>Contact</h3>

				<ul class="address">
					<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Surabaya, <span>Indonesia.</span></li>
					<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:beepro@indo.com">beepro@indo.com</a></li>
					<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>Information</h3>
				<ul class="info"> 
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="about.html">About Us</a></li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="contact.html">Contact Us</a></li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="faq.html">FAQ's</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>Profile</h3>
				<ul class="info"> 
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="login.html">Login</a></li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="registered.html">Create Account</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<!--footer-->

	<div class="footer-copy">

		<div class="container">
			<p>© 2017 Bee-Pro. All rights reserved</p>
		</div>
	</div>

</div>	
<div class="footer-botm">
	<div class="container">
		<div class="w3layouts-foot">
			<ul>
				<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- //footer -->	
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- top-header and slider -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/

				$().UItoTop({ easingType: 'easeOutQuart' });

			});
</script>

<!-- main slider-banner -->
@endsection