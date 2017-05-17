@extends('review.masterReview')
<!-- {{var_dump($hashtag[0])}} -->
@section('kat')
	<li><a href="{{url('home')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
		@foreach($brand as $o => $kat)
			<li class="active">{{$kat->nama_brand}}</li>
		@endforeach
@endsection

@section('item')
<div class="col-md-10">
	<!--atas-->

	<!-- <div class="col-md-12"><br></div> -->
	@foreach($hashtag as $yy => $hash)
		<div class="col-md-12"  style="">
	<?php $tempId=-1; $tempAtas=-1 ?>
	@foreach($isi as $a)
		@if($a->nama_hashtag == $hash->nama_hashtag && $tempAtas==-1)
			<p style="text-align: left; padding-bottom:1%; font-size:200%"><b>{{$hash->nama_hashtag}}<b></p>
		<?php $tempAtas=0 ?>
		@endif
	@endforeach

		@foreach($isi as $ii)
		@if($ii->nama_hashtag == $hash->nama_hashtag && $ii->review_id!=$tempId)
		<?php $tempId=$ii->review_id ?>		
		<div class="col-md-4 top_brand_left" style="padding-bottom:3%">
			<div class="hover14 column">
				<div class="agile_top_brand_left_grid">
					<div class="agile_top_brand_left_grid1">
						<figure>
							<div class="snipcart-item block" >
								<div class="snipcart-thumb">
									<a href="{{url('single')}}"><img title=" " alt=" " src="{{url('images')}}{{$ii->path}}" width="300" height="250" style="" name="review" value="$rev->review->id"/></a>
									<h3 style="margin-bottom:16px"><b>{{$ii->judul}}</b></h3>
									<a href="{{ route('people.eh', ['isin' => $ii->users_id ]) }}">
									<h4 style="text-align:left;">
										<div class="col-md-3" style="padding:0"><p><img src="{{url('images')}}{{$ii->path_foto}}"  class="img-circle" alt="Cinque Terre" height="50px" width="50px"></p></div>
										<div class="col-md-9"><p style="text-align:left; font-size:100%"> {{str_limit($ii->nama,11)}}</p></div>
									</h4>
									</a>
									<div class="stars">
										@for ($i = 0; $i < $ii->rating; $i++)
										<i class="fa fa-star blue-star" aria-hidden="true"></i>
										@endfor
										@for ($i = 0; $i < 5-$ii->rating; $i++)
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
		<?php $tempId=0 ?>
		@endforeach
		@if($tempId==-1 && $tempAtas==-1 && $yy==0)
		<div class="col-md-2"></div>
		<div class="col-md-8" style="padding : 2em">
			<h3 style="text-align:center; font-size:250%">Sorry We Have No Review</h3>
		</div>
		<div class="col-md-2"></div>
		@endif

		</div>
	@endforeach



</div>

@endsection