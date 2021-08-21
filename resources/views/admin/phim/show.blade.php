@extends('layouts.app')

@section('content')
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Chỉnh sửa phim</h3>
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
                <input type="text" class="form-control" name="tenphim" id="exampleInputEmail1" placeholder="" value="{{$data->ten_phim}}">
            </div>
            <div class="form-group">
                <strong>Hình ảnh</strong>
                <input type="file" name="hinhanh" class="form-control" > 
                <img src="{{asset('public/uploads/' . $data->hinh_phim)}}" width="300px">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Diễn viên</label>
                <input type="text" class="form-control" name="dienvien" id="exampleInputEmail1" placeholder="" value="{{$data->dien_vien}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Thể loại</label>
                <select class="form-control" name="theloai">
                    @foreach($theloai as $key => $tl)
                        @if($tl->id_theloai == $data->id_theloai)
                            <option value="{{$tl->id_theloai}}" selected>{{$tl->ten_theloai}}</option>
                        @else
                            <option value="{{$tl->id_theloai}}">{{$tl->ten_theloai}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Thời lượng</label>
                <input type="text" class="form-control" name="thoiluong" id="exampleInputEmail1" placeholder="" value="{{$data->thoi_luong}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Năm sản xuất</label>
                <input type="text" class="form-control" name="namsx" id="exampleInputEmail1" placeholder="" value="{{$data->nam_sx}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Rating</label>
                <input type="text" class="form-control" name="rating" id="exampleInputEmail1" placeholder="" value="{{$data->rating}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Quốc gia</label>
                <select class="form-control" name="quocgia">
                    @foreach($quocgia as $key => $qg)
                        @if($qg->id_quocgia == $data->id_quocgia)
                            <option value="{{$qg->id_quocgia}}" selected>{{$qg->ten_quocgia}}</option>
                        @else
                            <option value="{{$qg->id_quocgia}}">{{$qg->ten_quocgia}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Đạo diễn</label>
                <input type="text" class="form-control" name="daodien" id="exampleInputEmail1" placeholder="" value="{{$data->daodien}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Link phim</label>
                <input type="text" class="form-control" name="linkphim" id="exampleInputEmail1" placeholder="" value="{{$data->link_phim}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Link trailer</label>
                <input type="text" class="form-control" name="linktrailer" id="exampleInputEmail1" placeholder="" value="{{$data->link_trailer}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nội dung</label>
                <textarea id="ckeditor1" name="noidung" rows="10" cols="100%">
                    {{$data->thong_tin}}
                </textarea>
            </div>
            <div class="form-group">
                <label>Quyền</label>
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
            <button type="submit" class="btn btn-primary">Tạo</button>
        </div>
    </form>
    

</div><!-- /.box -->

@endsection