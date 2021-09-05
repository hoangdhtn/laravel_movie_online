@extends('layouts.account')

@section('content')
<header class="page-header">
	<div class="container">
		<h1>Danh mục phim</h1>
	</div>
</header>
<!-- end page-header -->
<main>


	<section class="content-section">
		<div class="container">

			<div class="row">
				<div class="col-12">
					<nav class="nav  justify-content-center">
						<a href="{{route('danh-muc-phim.index')}}" class="nav-link btn btn-outline-secondary" style="margin: 10px;" href="">Tất cả phim</a>
						@foreach($theloais as $key => $theloai)
						<a href="{{ route('danh-muc-phim.show', $theloai->id_theloai) }}" class="nav-link btn btn-outline-secondary" style="margin: 10px;" href="">{{$theloai->ten_theloai}}</a>
						@endforeach
					</nav>
					<div class="section-title ">
						<h6 class="justify-content-center">HOVA Phim</h6>
						<h2>{{$title_theloai->ten_theloai}}</h2>
					</div>
					<!-- end section-title --> 
				</div>
				<!-- end col-2 -->
				@foreach($phims as $key => $phim)
				<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
					<div class="video-thumb">
						<figure class="video-image" style="width: 180px; height: 245px; background-color: white;"> <a href="#"><img src="{{asset('public/uploads/' . $phim->hinh_phim)}}" alt="Image"></a>
							<div class="circle-rate">
								<svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
									<circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none" cx="15" cy="15" r="14"></circle>
									<circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2" stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
								</svg>
								<b>{{$phim->rating}}</b> </div>
								<!-- end circle-rate -->
								<div class="hd">1080 <b>HD</b></div>
								<!-- end hd --> 
							</figure>
							<div class="video-content"> <small class="range">{{$phim->thoi_luong}}</small>
								<ul class="tags">
									@foreach($theloais as $key => $theloai)
									@if($theloai->id_theloai == $phim->id_theloai)
									<li>{{$theloai->ten_theloai}}</li>
									@endif
									@endforeach
								</ul>
								{{-- <div class="age">PG13</div> --}}
								<!-- end age -->
								<h3 class="name"><a href="{{ route('xem-phim.show', $phim->id_phim) }}">{{$phim->ten_phim}}</a></h3>
							</div>
							<!-- end video-content --> 
						</div>
						<!-- end video-thumb --> 
					</div>
					@endforeach
					<!-- end col-2 -->
				</div>
				<!-- panigation -->
				{{ $phims->render('pagination') }}
			</div>
			<!-- end container --> 


		</section>
		<!-- end content-section -->


		@endsection