<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('users.user');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showname($id)
    {
        //
        $ten = User::find($id);
        return view('users.username')->with(compact('ten'));
    }
    public function updatename(Request $request, $id)
    {
        //
        $data = $request->validate([
            'ten' => 'required|max:200',
        ], [
            'ten.required' => 'Yêu cầu tên',
        ]);

        $ten = User::find($id);
        $ten->name = $data['ten'];
        $ten->save();
        return back()->with('success', 'Thay đổi thành công')->with(compact('ten'));
    }

    public function showpass($id)
    {
        //
        return view('users.userpass');
    }
    public function updatepass(Request $request, $id)
    {
        //
        $data = $request->validate([
            'pass' => 'required|max:200|min:8',
        ], [
            'pass.required' => 'Yêu cầu mật khẩu',
        ]);

        $ten = User::find($id);
        $ten->password = Hash::make($data['pass']);
        $ten->save();
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
    }
}
