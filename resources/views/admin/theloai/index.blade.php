@extends('layouts.app')

@section('content')
<div class="col-xs-12">
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Danh sách người dùng</h3>
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
                <a href="{{ route('theloai.create') }}" class="btn btn-success btn-lg">Thêm thể loại</a>
            </div>
			<table class="table table-hover">
				<tr>
					<th>ID</th>
					<th>Tên thể loại</th>
					<th>Kích hoạt</th>
				</tr>
				@foreach($data as $key => $value)
				<tr>
					<td>{{$value->id_theloai}}</td>
					<td>{{$value->ten_theloai}}</td>
					<td>
						@if($value->status == 1)
						<p>Kích hoạt <a href="{{ URL::to('/theloai/vohieu/'.$value->id_theloai)}}" style="margin-left: 5px;"> Thay đổi</a></p>
						@else
						<p>Vô hiệu <a href="{{ URL::to('/theloai/kichhoat/'.$value->id_theloai)}}" style="margin-left: 5px;"> Thay đổi</a></p>
						@endif
						
					</td>
					<td>
						<a href="{{route('theloai.show', [$value->id_theloai])}}" class="btn btn-primary">Sửa</a>

					</td>
					<td>
						<form action="{{route('theloai.destroy', [$value->id_theloai])}}" method="POST">
							@method('DELETE')
							@csrf
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