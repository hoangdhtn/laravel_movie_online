@extends('layouts.user')
@section('content')

<div class="col-md-8">
	<a href="{{ URL::to('/user/name/' . Auth::id())}}" class="btn btn-primary">Đổi tên người dùng</a>
	<a href="{{ URL::to('/user/pass/' . Auth::id())}}" class="btn btn-primary">Đổi mật khẩu người dùng</a>
</div>

@endsection