<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quocgia;

class QuocGiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Quocgia::all();
        return view('admin.quocgia.index')->with(compact('data'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function kichhoat($id)
    {
        //
        $theloai = Quocgia::find($id);
        $theloai->status = 1;
        $theloai->save();
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
        $theloai = Quocgia::find($id);
        $theloai->status = 0;
        $theloai->save();
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
         return view('admin.quocgia.create');
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
        //
         $data = $request->validate([
            'name' => 'required|max:200',
            'status' => 'required',
        ], [
            'name.required' => 'Yêu cầu tên thể loại',
            'status.required' => 'Yêu cầu tên quyền',
        ]);

        $theloai = new Quocgia();
        $theloai->ten_quocgia = $data['name'];
        $theloai->status = $data['status'];
        $theloai->save();

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
        $data = Quocgia::find($id);
        return view('admin.quocgia.show')->with(compact('data'));
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
            'ten_quocgia' => 'required|max:200',
            'status' => 'required',
        ], [
            'ten_quocgia.required' => 'Yêu cầu tên thể loại',
            'status.required' => 'Yêu cầu tên quyền',
        ]);

        $theloai = Quocgia::find($id);
        $theloai->ten_quocgia = $data['ten_quocgia'];
        $theloai->status = $data['status'];
        $theloai->save();

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
        Quocgia::find($id)->delete();
        return back()->with('success', 'Xóa thành công');
    }
}
