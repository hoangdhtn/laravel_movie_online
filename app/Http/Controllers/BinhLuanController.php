<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Binhluan;

class BinhLuanController extends Controller
{
    //
    public function postbinhluan(Request $request, $id_nguoidung, $id_phim){
        $data = $request->validate([
            'noi_dung' => 'required|max:255 |min:1',
        ], [
            'noi_dung.required' => 'Yên cầu nhập nội dung',
        ]);

        $binhluan = new Binhluan();
        $binhluan->id_user = $id_nguoidung;
        $binhluan->id_phim = $id_phim;
        $binhluan->noi_dung = $data['noi_dung'];
        $binhluan->save();

        return back();
    }
}
