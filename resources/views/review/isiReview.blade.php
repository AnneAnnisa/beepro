@extends('review.masterReview')
<!-- {{var_dump($hashtag[0])}} -->
@section('kat')
<li><a href="{{url('home')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
			<!-- SALAH NIH, HARUSNYA KATEGORI BESAR -->
			<li class="active">Makeup</li>
@endsection
@section('makeupa')
<li class="active"><a href="{{url('makeup-face')}}">#kylielipkit</a></li>
@endsection

@section('item')
<div class="col-md-10">
	<!--atas-->

	<div class="col-md-12"><br></div>
	<h1 style="text-align: left;">#CompactPowder</h1>
	<div class="col-md-12"  style="margin:10px">
		<div class="col-md-4 top_brand_left" >
			<div class="hover14 column">
				<div class="agile_top_brand_left_grid">
					<div class="agile_top_brand_left_grid1">
						<figure>

							<div class="snipcart-item block" >
								<div class="snipcart-thumb">
									<a href="{{url('single')}}"><img title=" " alt=" " class="img-responsive"src="images/powder1.jpg" width="280" height="280" style=""/></a>		
									<h3 style="margin-bottom:16px">With and Without</h3>
									<h4 style="text-align:left;"><img src="images/2.png"  class="img-circle" alt="Cinque Terre" width="304" height="236" style="width:15%; height:15%"> Tiara Amalia</h4>
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

		<!--tengah-->
		<div class="col-md-4 top_brand_left" >
			<div class="hover14 column">
				<div class="agile_top_brand_left_grid">
					<div class="agile_top_brand_left_grid1">
						<figure>
							<div class="snipcart-item block" >
								<div class="snipcart-thumb">
									<a href="{{url('single')}}"><img title=" " alt=" " class="img-responsive"src="images/powder2.jpg" width="280" height="280" style=""/></a>		
									<h3 style="margin-bottom:16px">Bronze Catrice</h3>
									<h4 style="text-align:left;"><img src="images/10.png"  class="img-circle" alt="Cinque Terre" width="304" height="236" style="width:15%; height:15%"> Vinsen</h4>
									<div class="stars">
										<i class="fa fa-star blue-star" aria-hidden="true"></i>
										<i class="fa fa-star blue-star" aria-hidden="true"></i>
										<i class="fa fa-star gray-star" aria-hidden="true"></i>
										<i class="fa fa-star gray-star" aria-hidden="true"></i>
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
		<!--kiri-->

</div>

@endsection