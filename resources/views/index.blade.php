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
						<div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
							<div class="agile-tp">
								<h5><a href="{{url('makeup-lips-kylie')}}">#KylieLipKit</a></h5>
								<!-- <p class="w3l-ad">We've pulled together all our advertised offers into one place, so you won't miss out on a great deal.</p> -->
							</div>
							<div class="agile_top_brands_grids">
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
															<a href="single.html"><img title=" " alt=" " class="img-responsive"src="images/kylie3.jpg" width="300" height="300" style=""/></a>		
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
															<a href="single2.html"><img title=" " alt=" " class="img-responsive"src="images/kylie4.jpg" width="300" height="300" style=""/></a>	
															<h5>Kylie Lip Kit!</h5>
															<h4 style="text-align:left;"><img src="images/10.png"  class="img-circle" alt="Cinque Terre" width="304" height="236" style="width:10%; height:10%"> Vinsen</h4>
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
															<a href="products.html"><img title=" " alt=" " class="img-responsive"src="images/kylie2.jpg" width="300" height="300" style=""/></a>	
															<h5>Kylie Lip Kit!</h5>
															<h4 style="text-align:left;"><img src="images/12.png"  class="img-circle" alt="Cinque Terre" width="304" height="236" style="width:10%; height:10%"> Kania Amalia</h4>
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
								<div class="clearfix"> </div>
						</div>
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
	<div class="brands">
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