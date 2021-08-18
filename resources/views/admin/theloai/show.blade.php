@extends('layouts.app')

@section('content')
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Sửa tài thể loại</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="POST" action="{{route('theloai.update',[$data->id_theloai])}}">
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
                <label for="exampleInputEmail1">Tên thể loại</label>
                <input type="text" class="form-control" name="ten_theloai" id="exampleInputEmail1" placeholder="" value="{{$data->ten_theloai}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Kích hoạt</label>
                <select class="form-control" name="status">
                    @if($data->status == 1)
                        <option value="1" selected>Kích hoạt</option>
                        <option value="0">Vô hiệu</option>
                    @else
                        <option value="1">Kích hoạt</option>
                        <option value="0" selected>Vô hiệu</option>
                    @endif
                </select>
            </div>
        </div><!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </div>
    </form>
</div><!-- /.box -->

@endsection