@extends('review.masterReview')
@section('kat')
	<h1>Search result for {{$query}}</h1>
@endsection

@section('item')
<div class="col-md-12">
	<!--atas-->
 
	@foreach($item as $index => $cont)
	<div class="agile-tp"><h1 style="text-align: left; font-size:180%">{{$cont->nama_hashtag}}</h1></div>
	
	<div class="col-md-12"  style="margin:10px">
		@foreach($cont->memiliki as $i => $rev)
		<div class="col-md-4 top_brand_left" style="padding-bottom:2%">
			<div class="hover14 column">
				<div class="agile_top_brand_left_grid">
					<div class="agile_top_brand_left_grid1">
						<figure>

							<div class="snipcart-item block" >
								<div class="snipcart-thumb">
									@foreach($rev->review->foto as $kk => $revf)
									@if($kk == 0)
										<a href="{{url('single')}}"><img title=" " alt=" " class="" src="{{url('images')}}{{$revf->path}}" width="280" height="280" style=""/></a>		
									@endif
									@endforeach
									<h3 style="margin-bottom:0">{{$rev->review->judul}}</h3>
									@foreach($user as $us)
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
		@endforeach
	</div>
	@endforeach
		<!--kiri
 -->
</div>

@endsection