@extends('master')
@section('content')

<!-- breadcrumbs -->
@foreach($user as $iss)
<div class="breadcrumbs">
	<div class="container">
		<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
			<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
			<li class="active">{{$iss->nama}}</li>
		</ol>
	</div>
</div>

<!-- //breadcrumbs -->
<div class="products" style="padding-top:1em">
	<div class="container">
		<div class="agileinfo_single">
			<div class="col-md-12">
				<h2 style="text-align:center;">{{$iss->nama}}</h2> 
			</div>
			<div class="col-md-12 ">
				<div class="col-lg-8 col-lg-offset-2" style="padding:0 15em">
					<img id="example" src="{{url('/images')}}{{$iss->path_foto}}" alt=" " class="img-responsive" align="middle">
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-2">
				</div>
				<div class="col-md-8" align="center">
					<br><h3 style="text-align: center; font-size:150%">About Me:</h3>
					<p align="justify" style="margin:5px">{{$iss->aboutme}}</p>
				</div>
				<div class="col-md-2">
				</div>
			</div>
			<div class="col-md-12"  style="margin:5px">
				<br><h4 style="text-align: center; font-size:150%">Review:</h4><br>
				<div class="col-md-2">
				</div>
				@foreach($revv as $ii => $iss)
				@if($ii<'4')
				<div class="col-md-2"  style="margin:5px">
					<a href="{{ route('isiReview.eh', ['isin' => $iss->review_id ]) }}">
					<img id="example" src="{{url('/images')}}{{$iss->path}}" alt=" " class="img-responsive">
					<p> {{$iss->judul}} </p></a>
					<div class="stars">
						@for ($i = 0; $i < $iss->rating; $i++)
						<i class="fa fa-star blue-star" aria-hidden="true"></i>
						@endfor
						@for ($i = 0; $i < 5-$iss->rating; $i++)
						<i class="fa fa-star gray-star" aria-hidden="true"></i>
						@endfor
					</div>
				</div>
				@endif
				@endforeach
				<div class="col-md-2">
				</div>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>
@endforeach

<!-- new -->
<div class="newproducts-w3agile">
	<div class="container">
		<h3>Popular</h3>
		<div class="agile_top_brands_grids">
			<!--yeee-->
			@foreach($isi as $xx => $ree)
			@if($xx < 4)
			<div class="agile_top_brands_grids">
				<div class="col-md-3 top_brand_left">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block" >
										<div class="snipcart-thumb">
											<a href="{{ route('isiReview.eh', ['isin' => $ree->review_id ]) }}"><img title=" " alt=" " class="" src="{{url('images')}}{{$ree->path}}" width="200" height="200" style=""/></a>
											<h5>{{$ree->judul}}</h5>
											<a href="{{ route('people.eh', ['isin' => $ree->users_id ]) }}">
											<h4 style="text-align:left;">
												<div class="col-md-2" style="padding:0"><p><img src="{{url('images')}}{{$ree->path_foto}}"  class="img-circle" alt="Cinque Terre" height="50px" width="50px"></p></div>
												<div class="col-md-10"><p style="text-align:left; font-size:100%"> {{str_limit($ree->nama,10)}}</p></div>
											</h4>
											</a>
											<!-- <h4 style="text-align:left;"><img src="images/2.png"  class="img-circle" alt="Cinque Terre" width="304" height="236" style="width:10%; height:10%"> Tiara Amalia</h4> -->
											<div class="stars">
												@for ($i = 0; $i < $ree->rating; $i++)
												<i class="fa fa-star blue-star" aria-hidden="true"></i>
												@endfor
												@for ($i = 0; $i < 5-$ree->rating; $i++)
												<i class="fa fa-star gray-star" aria-hidden="true"></i>
												@endfor
											</div>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endif
			@endforeach
			<!--yeee-->
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //new -->


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

@endsection