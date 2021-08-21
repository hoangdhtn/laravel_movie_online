@extends('layouts.app')

@section('content')
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Thêm phim</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="POST" action="{{route('phim.store')}}" enctype="multipart/form-data">
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
                <label for="exampleInputEmail1">Tên phim</label>
                <input type="text" class="form-control" name="tenphim" id="exampleInputEmail1" placeholder="">
            </div>
            <div class="form-group">
                <strong>Hình ảnh</strong>
                <input type="file" name="hinhanh" class="form-control" placeholder="Hình ảnh">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Diễn viên</label>
                <input type="text" class="form-control" name="dienvien" id="exampleInputEmail1" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Thể loại</label>
                <select class="form-control" name="theloai">
                    @foreach($theloai as $key => $tl)
                        <option value="{{$tl->id_theloai}}">{{$tl->ten_theloai}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Thời lượng</label>
                <input type="text" class="form-control" name="thoiluong" id="exampleInputEmail1" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Năm sản xuất</label>
                <input type="text" class="form-control" name="namsx" id="exampleInputEmail1" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Rating</label>
                <input type="text" class="form-control" name="rating" id="exampleInputEmail1" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Quốc gia</label>
                <select class="form-control" name="quocgia">
                    @foreach($quocgia as $key => $qg)
                        <option value="{{$qg->id_quocgia}}">{{$qg->ten_quocgia}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Đạo diễn</label>
                <input type="text" class="form-control" name="daodien" id="exampleInputEmail1" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Link phim</label>
                <input type="text" class="form-control" name="linkphim" id="exampleInputEmail1" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Link trailer</label>
                <input type="text" class="form-control" name="linktrailer" id="exampleInputEmail1" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nội dung</label>
                <textarea id="ckeditor1" name="noidung" rows="10" cols="100%">

                </textarea>
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