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
            <div class="box-tools">
                <a href="{{ route('management-user.create') }}" class="btn btn-success btn-lg">Thêm người dùng</a>
            </div>
            <table class="table table-hover">
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Quyền</th>
                </tr>
                @foreach($data as $key => $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->id_role}}</td>
                    <td>
                        <a href="" class="btn btn-primary">Sửa</a>
                        <a href="" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>

                @endforeach

            </table>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</div>
@endsection