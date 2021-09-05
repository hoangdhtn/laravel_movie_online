@extends('layouts.user')
@section('content')

<div class="col-md-8">
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
	<form role="form" method="POST" action="{{URL::to('/user/changepass/' . Auth::id())}}">
		@csrf
		<div class="box-body">
			<div class="form-group">
				<label for="exampleInputEmail1">Nhập mật khẩu mới</label>
				<input type="password" class="form-control" id="exampleInputEmail1" name="pass">
			</div>
		</div><!-- /.box-body -->

		<div class="box-footer">
			<button type="submit" class="btn btn-primary">Cập nhật</button>
			<button onclick="javascript:history.back()" type="button" class="btn btn-primary">Quay lại</button>
		</div>
	</form>
</div>

@endsection