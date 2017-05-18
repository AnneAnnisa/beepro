@extends('master')
@section('content')

<!-- breadcrumbs -->
<!-- <div class="breadcrumbs">
	<div class="container">
		<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
			<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
			<li class="active">Make Up</li>
			<li class="active">Face</li>
		</ol>
	</div>
</div> -->
<!-- //breadcrumbs -->


<!-- REVIEW -->
<html>
<head>
	<title>edit profile</title>
	<!-- custom-theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Circle Sign Up Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- //custom-theme -->
		<link href="{{url('css/style1.css')}}" rel="stylesheet" type="text/css" media="all" />
		<!-- js -->
		<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	</head>
	<body>
		<div class="main">	
			<div class="w3layouts_main agileinfo w3">		
				<div class="w3_agile_signup_form agileits">
					<h1 class="w3_agileits w3ls">Edit Profile</h1>
					<div class="agile_login_form"><br><br><br><br><br>
						<form action="{{url('editprofile/'.$user->id)}}" method="POST" >
						{{csrf_field()}}
						<div>

						<input type="text" name="nama" value="{{$user->nama}}"><br>
						<input type="text" name="email"  value="{{$user->email}}" placeholder="email" required=""><br>
						<textarea type="message" name="aboutme" placeholder="I am..." value="" required="">{{$user->aboutme}}</textarea> <br>
						<!-- <input type="text" name="foto" placeholder="foto belum" required=""><br> -->

						</div>
						<input type="submit" value="submit" name="submit">

					</form>
																	
									</center>
											

							</div>
						</div>
					</div>
				</div>
			</body>

			</html>


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
			<script src="{{url('')}}/js/bootstrap.min.js"></script>

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