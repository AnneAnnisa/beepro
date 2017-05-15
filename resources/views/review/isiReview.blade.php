@extends('review.masterReview')
<!-- {{var_dump($hashtag[0])}} -->
@section('kat')
	<li><a href="{{url('home')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
		@foreach($kategori as $kat)
			<!-- SALAH NIH, HARUSNYA KATEGORI BESAR -->
			<li class="active">{{$kat->nama_kategori}}</li>
		@endforeach
@endsection
@section('makeupa')
	@foreach($hashtag as $hash)
	<li class="active"><a href="{{url('makeup-face')}}">{{$hash->nama_hashtag}}</a></li>
	@endforeach
@endsection

@section('item')
<div class="col-md-10">
	<!--atas-->

	<!-- <div class="col-md-12"><br></div> -->
	@foreach($hashtag as $hash)
	<div class="col-md-12"  style="margin:10px">
		<p style="text-align: left; padding-bottom:1%; font-size:200%"><b>{{$hash->nama_hashtag}}<b></p>
		<!-- INI ISINYA -->
		@foreach($isi as $ii)
		@if($ii->nama_hashtag == $hash->nama_hashtag)
		<div class="col-md-4 top_brand_left" style="padding-bottom:3%">
			<div class="hover14 column">
				<div class="agile_top_brand_left_grid">
					<div class="agile_top_brand_left_grid1">
						<figure>
							<div class="snipcart-item block" >
								<div class="snipcart-thumb">
									<?php $tempFoto=0 ?>
									@if($tempFoto==0)
									<?php $tempFoto=1 ?>
									<a href={{url('single')}}><img title=" " alt=" " src="{{url('images/1.jpg')}}" width="300" height="200" style="" name="review" value="$rev->review->id"/></a>	
									@endif	
									<h3 style="margin-bottom:16px">{{$ii->judul}}</h3>
									<h4 style="text-align:left;">
										<div class="col-md-3" style="padding:0"><p><img src="{{url('images')}}{{$ii->path_foto}}"  class="img-circle" alt="Cinque Terre" height="50px" width="50px"></p></div>
										<div class="col-md-9"><p style="text-align:left; font-size:100%"> {{str_limit($ii->nama,11)}}</p></div>
									</h4>
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
		@endif
		@endforeach
		<!-- AKHIR ISI -->
	</div>
	@endforeach
		<!--kiri-->

</div>

@endsection