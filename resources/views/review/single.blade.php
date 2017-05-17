@extends('master')
@section('content')
<!-- breadcrumbs -->
@foreach($review as $rev)
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li><a href="{{url('people')}}">{{$rev->nama}}</a></li>
				<li class="active">{{$rev->judul}}</li>
			</ol>
		</div>
	</div>

<!-- //breadcrumbs -->
	<div class="products" style="padding-top:1em;">
		<div class="container">
			<div class="agileinfo_single">
				<div class="col-md-12">
					<h1 style="text-align:center;margin-bottom:1%;font-size:200%">{{$rev->judul}}</h1>
				</div>
				<div class="col-md-12" style="padding-bottom:1%">
					<div class="col-md-1">
					</div>
					<div class="col-md-10">
						<img id="example" src="{{url('images')}}{{$rev->path}}" alt=" " class="img-responsive" style="padding:0 20em">	
					</div>
					<div class="col-md-1">

					</div>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<div class="col-md-2">
					</div>
					<div class="col-md-5">
						<a href="{{url('')}}/people">
							<h4 style="text-align:left;">
								<div class="col-md-1" style="padding:0"><p><img src="{{url('images')}}{{$rev->path_foto}}"  class="img-circle" alt="Cinque Terre" height="50px" width="50px"></p></div>
								<div class="col-md-11"><p style="text-align:left; font-size:150%; padding:0.5em"> {{str_limit($rev->nama,15)}}</p></div>
							</h4>
							<!-- <h4 style="text-align:left; color:black"><img src="{{url('images/10.png')}}"  class="img-circle" alt="Cinque Terre" width="304" height="236" style="width:10%; height:10%"> Tiara Amalia</h4> -->
						</a>
					</div>		
					<div class="col-md-3">
						<h4 style="text-align: right;color: blue">Rp {{$rev->harga}}</h4>
						<h5 style="text-align: right;">{{str_limit($rev->toko,20)}}</h5>		
					</div>													
					<div class="col-md-2"></div>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-12">
					<div class="col-md-2">
					</div>
					<div class="col-md-8">
						<h2 style="text-align: center; color:#fe9126; margin-bottom:0; font-size:200%; text-decoration: underline;">Review</h2>
						<p align="justify" style="margin:5px">{{$rev->isi}}</p>
					</div>
					<div class="col-md-2">
					</div>
				</div>
				<div class="col-md-12"><br></div>
				<div class="col-md-12">
					<div class="col-md-2">
					</div>
					<div class="col-md-8">
						<p style="margin: 20px 0; border: 0.1px solid #fe9126;"></p>
						<div class="col-md-1"><h4>Hashtag</h4></div>
						<div class="col-md-11" style="padding-left:5%">
						@foreach($memiliki as $xx => $mem)
							@if($xx <= 1) 
								<?php $temmm=$mem->hashtag_id  ?>
							@endif
							<a href="{{ route('review.eh', ['isiny' => $mem->id ]) }}" style="padding-left:1%">{{$mem->nama_hashtag}}</a>
						@endforeach
						</div>
					</div>
					<div class="col-md-2">
					</div>
				</div>
			</div>
		</div>
	</div>
@endforeach

@foreach($hashtag as $index => $cont)
	@if($cont->id == $temmm)
	<div class="newproducts-w3agile">
		<div class="container">
			<h3>{{$cont->nama_hashtag}}</h3>
				<div class="agile_top_brands_grids">
					<div class="agile_top_brands_grids">
					@foreach($cont->memiliki as $i => $rev)
					@if($i<3)
						<div class="col-md-4 top_brand_left">
							<div class="hover14 column">
								<div class="agile_top_brand_left_grid">
<!-- 											<div class="agile_top_brand_left_grid_pos">
										<img src="images/offer.png" alt=" " class="img-responsive" />
									</div> -->
									<div class="agile_top_brand_left_grid1">
										<figure>
											<div class="snipcart-item block" >
												<div class="snipcart-thumb">
													@foreach($rev->review->foto as $kk => $revf)
													@if($kk == 0)
														<a href="{{ route('isiReview.eh', ['isin' => $rev->review->id ]) }}"><img title=" " alt=" " class="" src="{{url('images')}}{{$revf->path}}" width="250" height="250" style=""/></a>		
													@endif
													@endforeach
													<h3 style="margin-bottom:0; font-size:150%">{{$rev->review->judul}}</h3>
													@foreach($user as $us)
														@if($rev->review->users_id == $us->id)
															<h6 style="text-align:left;">
																<div class="col-md-3" style="padding:0"><p><img src="{{url('images')}}{{$us->path_foto}}"  class="img-circle" alt="Cinque Terre" height="50px" width="50px"></p></div>
																<div class="col-md-9"><p style="text-align:left; font-size:150%"> {{str_limit($us->nama,11)}}</p></div>
															</h6>
														@endif
													@endforeach

													<div class="stars">
														@for ($i = 0; $i < $rev->review->rating; $i++)
															<i class="fa fa-star blue-star" aria-hidden="true"></i>
														@endfor
														@for ($i = 0; $i < 5-$rev->review->rating; $i++)
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
					@endif
					@endforeach
					</div>
						<div class="clearfix"> </div>
				</div>
		</div>
	</div>
	@endif
@endforeach
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

@endsection