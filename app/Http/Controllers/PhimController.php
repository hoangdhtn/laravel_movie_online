<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 
use App\Models\Phim;
use App\Models\Theloai;
use App\Models\Quocgia;

class PhimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Phim::all();
        $theloai = Theloai::all();
        $quocgia = Quocgia::all();
        return view('admin.phim.index')->with(compact('data', 'theloai', 'quocgia'));
    }
    public function kichhoat($id)
    {
        //
        $phim = Phim::find($id);
        $phim->status = 1;
        $phim->save();
        return back()->with('success', 'Thay đổi thành công');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function vohieu($id)
    {
        //
        $phim = Phim::find($id);
        $phim->status = 0;
        $phim->save();
        return back()->with('success', 'Thay đổi thành công');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $theloai = Theloai::all();
        $quocgia = Quocgia::all();
        return view('admin.phim.create')->with(compact('theloai','quocgia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
     $data = $request->validate([
        'tenphim' => 'required|max:200',
        'hinhanh' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'dienvien' => 'required',
        'theloai' => 'required',
        'thoiluong' => 'required',
        'namsx' => 'required',
        'rating' => 'required',
        'quocgia' => 'required',
        'daodien' => 'required',
        'linkphim' => 'required',
        'linktrailer' => 'required',
        'noidung' => 'required',
        'status' => 'required',
    ], [
        'tenphim.required' => 'Yêu cầu tên',
        'hinhanh.required' => 'Hình ảnh không hợp lệ',
        'dienvien.required' => 'Yêu cầu tên diễn viên',
        'theloai.required' => 'Yêu cầu thể loại',
        'thoiluong.required' => 'Yêu cầu thời lượng',
        'namsx.required' => 'Yêu cầu năm sản xuất',
        'rating.required' => 'Yêu cầu rating',
        'quocgia.required' => 'Yêu cầu quốc gia',
        'daodien.required' => 'Yêu cầu tên đạo diễn',
        'linkphim.required' => 'required',
        'linktrailer.required' => 'required',
        'noidung.required' => 'required',
        'status.required' => 'Yêu cầu tên quyền',
    ]);


     if($image = $request->file('hinhanh')){
        $image = $request->file('hinhanh');
        $input['imagename'] = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $destinationPath = public_path('uploads');
        $image->move($destinationPath, $input['imagename']);
    }

    $phim = new Phim();
    $phim->ten_phim = $data['tenphim'];
    $phim->hinh_phim = $input['imagename'];
    $phim->dien_vien = $data['dienvien'];
    $phim->thong_tin = $data['noidung'];
    $phim->id_theloai = $data['theloai'];
    $phim->thoi_luong = $data['thoiluong'];
    $phim->nam_sx = $data['namsx'];
    $phim->rating = $data['rating'];
    $phim->id_quocgia = $data['quocgia'];
    $phim->daodien = $data['daodien'];
    $phim->link_phim = $data['linkphim'];
    $phim->link_trailer = $data['linktrailer'];
    $phim->status = $data['status'];
    $phim->save();

    return back()->with('success', 'Thêm thành công');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = Phim::find($id);
        $theloai = Theloai::all();
        $quocgia = Quocgia::all();
        return view('admin.phim.show')->with(compact('data','theloai','quocgia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
     $data = $request->validate([
        'tenphim' => 'required|max:200',
        'hinhanh' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'dienvien' => 'required',
        'theloai' => 'required',
        'thoiluong' => 'required',
        'namsx' => 'required',
        'rating' => 'required',
        'quocgia' => 'required',
        'daodien' => 'required',
        'linkphim' => 'required',
        'linktrailer' => 'required',
        'noidung' => 'required',
        'status' => 'required',
    ], [
        'tenphim.required' => 'Yêu cầu tên',
        'hinhanh.image' => 'Hình ảnh không hợp lệ',
        'dienvien.required' => 'Yêu cầu tên diễn viên',
        'theloai.required' => 'Yêu cầu thể loại',
        'thoiluong.required' => 'Yêu cầu thời lượng',
        'namsx.required' => 'Yêu cầu năm sản xuất',
        'rating.required' => 'Yêu cầu rating',
        'quocgia.required' => 'Yêu cầu quốc gia',
        'daodien.required' => 'Yêu cầu tên đạo diễn',
        'linkphim.required' => 'required',
        'linktrailer.required' => 'required',
        'noidung.required' => 'required',
        'status.required' => 'Yêu cầu tên quyền',
    ]);


     if($image = $request->file('hinhanh')){
        $image = $request->file('hinhanh');
        $input['imagename'] = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $destinationPath = public_path('uploads');
        $image->move($destinationPath, $input['imagename']);
    }
    else{
        $input['imagename'] = Phim::find($id)->hinh_phim;
    }

    $phim = Phim::find($id);
    $phim->ten_phim = $data['tenphim'];
    $phim->hinh_phim = $input['imagename'];
    $phim->dien_vien = $data['dienvien'];
    $phim->thong_tin = $data['noidung'];
    $phim->id_theloai = $data['theloai'];
    $phim->thoi_luong = $data['thoiluong'];
    $phim->nam_sx = $data['namsx'];
    $phim->rating = $data['rating'];
    $phim->id_quocgia = $data['quocgia'];
    $phim->daodien = $data['daodien'];
    $phim->link_phim = $data['linkphim'];
    $phim->link_trailer = $data['linktrailer'];
    $phim->status = $data['status'];
    $phim->save();

    return back()->with('success', 'Sửa thành công');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $destinationPath = public_path() ."/uploads/";
        File::delete($destinationPath . Phim::find($id)->hinh_phim);
        Phim::find($id)->delete();
        
        return back()->with('success', 'Xóa thành công');
    }
}
