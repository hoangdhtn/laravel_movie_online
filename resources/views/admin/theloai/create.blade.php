@extends('layouts.app')

@section('content')
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Thêm tài khoản người dùng</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="POST" action="{{route('theloai.store')}}">
        @csrf
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

        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên thể loại</label>
                <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="">
            </div>
            <div class="form-group">
                <label>Quyền</label>
                <select class="form-control" name="status">
                    <option value="1">Kích hoạt</option>
                    <option value="0">Vô hiệu</option>
                </select>
            </div>
        </div><!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Tạo</button>
        </div>
    </form>
</div><!-- /.box -->

@endsection