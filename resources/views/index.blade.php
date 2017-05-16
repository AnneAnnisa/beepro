@extends('master')
@section('content')
<!-- //navigation -->
	<!-- main-slider -->
		<ul id="demo1">

			<li>
				<img src="images/2.jpg" alt="" />
				  <div class="slide-desc">
					<h3>I love my brushes </h3>
				</div>
			</li>
			<li>
				<img src="images/1.jpg" alt="" />
				<div class="slide-desc">
					<h3>Makeup is art , Beauty is spirit</h3>
				</div>
			</li>			
			<li>
				<img src="images/3.jpg" alt="" />
				<div class="slide-desc">
					<h3>Brushes Eyebrows doesn't brush your hair</h3>
				</div>
			</li>

		</ul>


		
	<!-- //main-slider -->
	<!-- //top-header and slider -->
	<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
		<h2>Review !</h2>
			<div class="grid_3 grid_5">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">Newest</a></li>
						<li role="presentation"><a href="#tours" role="tab" id="tours-tab" data-toggle="tab" aria-controls="tours">Popular</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<!-- AWAL NIH -->
	                	@foreach($hash as $index => $cont)
	                	<!-- UNTUK BERAPA hashtag TERBARU YANG DIAMBIL -->
	                	@if($index<2)
						<div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab" style="padding-bottom:2%">
							<div class="agile-tp">
								<h5><a href="{{ route('review.eh', ['isiny' => $cont->id ]) }}" >{{$cont->nama_hashtag}}</a></h5>
								<!-- <p class="w3l-ad">We've pulled together all our advertised offers into one place, so you won't miss out on a great deal.</p> -->
							</div>
							<div class="agile_top_brands_grids" style="margin-top:0">
								@foreach($cont->memiliki as $i => $rev)
								@if($i<3)
								<div class="col-md-4 top_brand_left" style="padding-bottom:3%">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block" >
														<div class="snipcart-thumb">
															@foreach($rev->review->foto as $kk => $revf)
															@if($kk == 0)
															<a href="single.html"><img title=" " alt=" " src="images{{$revf->path}}" width="300" height="300" style="" name="review" value="$rev->review->id"/></a>		
															@endif
															@endforeach

															<h5>{{$rev->review->judul}}</h5>
															
															@foreach($user as $us)
															<!-- dd({{$us->id}}) -->
																@if($rev->review->users_id == $us->id)
																<h4 style="text-align:left;">
																	<div class="col-md-3" style="padding:0"><p><img src="{{url('images')}}{{$us->path_foto}}"  class="img-circle" alt="Cinque Terre" height="50px" width="50px"></p></div>
																	<div class="col-md-9"><p style="text-align:left; font-size:150%"> {{str_limit($us->nama,11)}}</p></div>
																</h4>
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
						@endif
						@endforeach
						<!-- AKHIR NEWEST -->


						<div role="tabpanel" class="tab-pane fade" id="tours" aria-labelledby="tours-tab">
							<div class="agile-tp">
								<h5>This week</h5>
								<p class="w3l-ad">We've pulled together all our advertised offers into one place, so you won't miss out on a great deal.</p>
							</div>

<!--yeee-->
							<div class="agile_top_brands_grids">
								<div class="col-md-4 top_brand_left">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block" >
														<div class="snipcart-thumb">
															<a href="products.html"><img title=" " alt=" " src="images/kylie3.jpg" style="max-width:100%"/></a>		
															<h5>Kylie Lip Kit!</h5>
															<h4 style="text-align:left;"><img src="images/2.png"  class="img-circle" alt="Cinque Terre" width="304" height="236" style="width:10%; height:10%"> Tiara Amalia</h4>
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
														</div>
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>

<!--yeee-->
<!--yeee-->
							<div class="agile_top_brands_grids">
								<div class="col-md-4 top_brand_left">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block" >
														<div class="snipcart-thumb">
															<a href="products.html"><img title=" " alt=" " src="images/kylie3.jpg" style="max-width:100%"/></a>		
															<h5>Kylie Lip Kit!</h5>
															<h4 style="text-align:left;"><img src="images/2.png"  class="img-circle" alt="Cinque Terre" width="304" height="236" style="width:10%; height:10%"> Tiara Amalia</h4>
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
														</div>
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>
							</div>

<!--yeee-->										
<!--yeee-->
							<div class="agile_top_brands_grids">
								<div class="col-md-4 top_brand_left">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block" >
														<div class="snipcart-thumb">
															<a href="products.html"><img title=" " alt=" " src="images/kylie3.jpg" style="max-width:100%"/></a>		
															<h5>Kylie Lip Kit!</h5>
															<h4 style="text-align:left;"><img src="images/2.png"  class="img-circle" alt="Cinque Terre" width="304" height="236" style="width:10%; height:10%"> Tiara Amalia</h4>
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
														</div>
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>
							</div>

<!--yeee-->									
<!--yeee-->
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- //top-brands -->
 <!-- Carousel
    ================================================== -->
<!--     <div id="myCarousel" class="carousel slide" data-ride="carousel"> -->
      <!-- Indicators -->
<!--       <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
         <a href="beverages.html"> <img class="first-slide" src="images/b1.jpg" alt="First slide"></a>
       
        </div>
        <div class="item">
         <a href="personalcare.html"> <img class="second-slide " src="images/b3.jpg" alt="Second slide"></a>
         
        </div>
        <div class="item">
          <a href="household.html"><img class="third-slide " src="images/b1.jpg" alt="Third slide"></a>
          
        </div>
      </div>
    
    </div> --><!-- /.carousel -->	
    
<!--banner-bottom-->
<!-- 				<div class="ban-bottom-w3l">
					<div class="container">
					<div class="col-md-6 ban-bottom3">
							<div class="ban-top">
								<img src="images/p2.jpg" class="img-responsive" alt=""/>
								
							</div>
							<div class="ban-img">
								<div class=" ban-bottom1">
									<div class="ban-top">
										<img src="images/p3.jpg" class="img-responsive" alt=""/>
										
									</div>
								</div>
								<div class="ban-bottom2">
									<div class="ban-top">
										<img src="images/p4.jpg" class="img-responsive" alt=""/>
										
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="col-md-6 ban-bottom">
							<div class="ban-top">
								<img src="images/111.jpg" class="img-responsive" alt=""/>
								
								
							</div>
						</div>
						
						<div class="clearfix"></div>
					</div>
				</div> -->
<!--banner-bottom-->
<!--brands-->


<br>
	<div class="brands" style="padding : 5em">
		<div class="container">
		<h3>Brand Store</h3>
			<div class="brands-agile">
				<div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="#">LAKME</a></p>
					</div>
				</div>
				<div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="#">NYKAA</a></p>
					</div>
				</div>
				<div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="#">THE BODY SHOP</a></p>
					</div>
				</div>
				
				<div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="#">THE FACE SHOP</a></p>
					</div>
				</div>
				<div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="#">MAYBELINNE NEW YORK</a></p>
					</div>
				</div>
				<div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="#">ETUDE</a></p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="brands-agile-1">
				<div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="#">INNISFREE</a></p>
					</div>
				</div>
				<div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="#">NYX</a></p>
					</div>
				</div>
				<div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="#">COLORBAR</a></p>
					</div>
				</div>
				
				<div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="#">M.A.C</a></p>
					</div>
				</div>
				<div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="#">MARC JACOBS</a></p>
					</div>
				</div>
				<div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="#">THEBALM</a></p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="brands-agile-2">
				<div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="{{url('makeup-lips-kylie')}}">KYLIE KIT</a></p>
					</div>
				</div>
				<div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="#">ORIFLAME</a></p>
					</div>
				</div>
				<div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="#">KYLIE</a></p>
					</div>
				</div>
				
				<div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="#">L'OREAL PARIS</a></p>
					</div>
				</div>
				<div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="#">BIODERMA</a></p>
					</div>
				</div>
				<div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="#">KIEHL'S</a></p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>	
<!--//brands-->
<!--footer-->
		
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
<!-- //here ends scrolling icon -->
<!-- //main slider-banner --> 
@endsection