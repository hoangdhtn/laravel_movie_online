@extends('layouts.app')

@section('content')
<div class="col-xs-12">
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Danh sách phim</h3>
			<div class="box-tools">
				<div class="input-group">
					<input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
					<div class="input-group-btn">
						<button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
					</div>
				</div>
			</div>
		</div><!-- /.box-header -->
		<div class="box-body table-responsive no-padding">
			@if(Session::has('success'))
			<div class="alert alert-success">
				{{Session::get('success')}}
				@php
				Session::forget('success');
				@endphp
			</div>
			@endif

			@if(Session::has('fail'))
			<div class="alert alert-danger">
				{{Session::get('fail')}}
				@php
				Session::forget('fail');
				@endphp
			</div>
			@endif


			@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<div class="box-tools">
                <a href="{{ route('phim.create') }}" class="btn btn-success btn-lg">Thêm phim</a>
            </div>
			<table class="table table-bordered">
				<tr>
					<th>ID</th>
					<th>Hình ảnh</th>
					<th>Tên</th>
					<th>Thể loại</th>
					<th>Quốc gia</th>
					<th>Kích hoạt</th>
					<th>Tùy chỉnh</th>
				</tr>
				@foreach($data as $key => $value)
				<tr>
					<td>{{$value->id_phim}}</td>
					<td>
						<img src="{{asset('public/uploads/' . $value->hinh_phim)}}" class="img-fluid" alt="quixote" style="max-width: 40px;">
					</td>
					<td>{{$value->ten_phim}}</td>
					<td>
						@foreach($theloai as $key => $tl)
							@if($value->id_theloai == $tl->id_theloai)
								{{$tl->ten_theloai}}
							@endif

						@endforeach
					</td>
					<td>
						@foreach($quocgia as $key => $qg)
							@if($value->id_quocgia == $qg->id_quocgia)
								{{$qg->ten_quocgia}}
							@endif

						@endforeach
					</td>
					<td>
						@if($value->status == 1)
						<p>Kích hoạt <a href="{{ URL::to('/phim/vohieu/'.$value->id_phim)}}" style="margin-left: 5px;"> Thay đổi</a></p>
						@else
						<p>Vô hiệu <a href="{{ URL::to('/phim/kichhoat/'.$value->id_phim)}}" style="margin-left: 5px;"> Thay đổi</a></p>
						@endif
						
					</td>
					<td>
						
						<form action="{{route('phim.destroy', [$value->id_phim])}}" method="POST">
							@method('DELETE')
							@csrf
							<a href="{{route('phim.show', [$value->id_phim])}}" class="btn btn-info
								">Xem</a>
							<a href="{{route('phim.show', [$value->id_phim])}}" class="btn btn-primary">Sửa</a>
							<input type="submit" class="btn btn-danger" value="Xóa">
						</form>

					</td>
				</tr>

				@endforeach

			</table>
		</div><!-- /.box-body -->
	</div><!-- /.box -->
</div>
@endsection