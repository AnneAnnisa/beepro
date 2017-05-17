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
	                	@if($index<'2')
						<div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab" style="padding-bottom:2%">
							<div class="agile-tp">
								<h5><a href="{{ route('review.eh', ['isiny' => $cont->id ]) }}" >{{$cont->nama_hashtag}}</a></h5>
								<!-- <p class="w3l-ad">We've pulled together all our advertised offers into one place, so you won't miss out on a great deal.</p> -->
							</div>
							<div class="agile_top_brands_grids" style="margin-top:0">
								@foreach($cont->memiliki as $i => $rev)
								@if($i<'3')
								<div class="col-md-4 top_brand_left" style="padding-bottom:3%">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block" >
														<div class="snipcart-thumb">
															@foreach($rev->review->foto as $kk => $revf)
															@if($kk == 0)
															<a href="{{ route('isiReview.eh', ['isin' => $rev->review->id ]) }}"><img title=" " alt=" " src="images{{$revf->path}}" width="300" height="300" style="" name="review" value="$rev->review->id"/></a>		
															@endif
															@endforeach

															<h5>{{$rev->review->judul}}</h5>
															
															@foreach($user as $us)
															<!-- dd({{$us->id}}) -->
																@if($rev->review->users_id == $us->id)
																<a href="{{ route('people.eh', ['isin' => $us->id ]) }}">
																<h4 style="text-align:left;">
																	<div class="col-md-3" style="padding:0"><p><img src="{{url('images')}}{{$us->path_foto}}"  class="img-circle" alt="Cinque Terre" height="50px" width="50px"></p></div>
																	<div class="col-md-9"><p style="text-align:left; font-size:150%"> {{str_limit($us->nama,11)}}</p></div>
																</h4>
																</a>
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
								<h5>3 Trending Review!</h5>
							</div>
						@foreach($isi as $xx => $ree)
						@if($xx < 3)
							<div class="agile_top_brands_grids">
								<div class="col-md-4 top_brand_left">
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
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<br>

	<div class="brands" style="padding : 5em">
		<div class="container">
		<h3>Brand Store</h3>
			<div class="brands-agile">
				<div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="{{ route('brand.eh', ['isinya' => 'LAKME' ]) }}">LAKME</a></p>
					</div>
				</div>
				<div class="col-md-2 w3layouts-brand">
					<div class="brands-w3l">
						<p><a href="{{ route('brand.eh', ['isinya' => 'NYKAA' ]) }}">NYKAA</a></p>
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
<script src="{{url('js/bootstrap.min.js')}}"></script>

<!-- top-header and slider -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<!-- //main slider-banner --> 
@endsection