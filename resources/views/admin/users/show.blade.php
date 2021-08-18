@extends('layouts.app')

@section('content')
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Sửa tài khoản người dùng</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="POST" action="{{ route('management-user.update',[$data->id]) }}">
        @method('PUT')
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
                <label for="exampleInputEmail1">Tên người dùng</label>
                <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter name" value="{{$data->name}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Địa chỉ Email</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email" value="{{$data->email}}">
            </div>
            <div class="form-group">
                <label>Quyền</label>
                <select class="form-control" name="role">
                    @foreach($role as $key => $value)
                    <option value="{{$value->id}}" 
                        @if($data->id_role == $value->id)
                        selected
                        @endif 
                        >{{$value->name_role}}</option>
                    @endforeach
                </select>
            </div>
        </div><!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </div>
    </form>
</div><!-- /.box -->

@endsection