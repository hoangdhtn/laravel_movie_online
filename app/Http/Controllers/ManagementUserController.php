<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;

class ManagementUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = User::all();
        $role = Role::all();
        return view('admin.users.index')->with(compact('data','role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = Role::all();
        return view('admin.users.create')->with(compact('data'));
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
            'name' => 'required|max:200',
            'email' => 'required|max:200',
            'password' => 'required',
            'role' => 'required',
        ], [
            'name.required' => 'Yêu cầu tên người dùng',
            'email.required' => 'Yêu cầu tên email',
            'password.required' => 'Yêu cầu mật khẩu',
        ]);

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'id_role' => $data['role'],
            'password' => Hash::make($data['password']),
        ]);
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
        $data = User::find($id);
        $role = Role::all();
        return view('admin.users.show')->with(compact('data','role'));
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
        //
        $data = $request->validate([
            'name' => 'required|max:200',
            'email' => 'required|max:200',
            'role' => '',
        ], [
            'name.required' => 'Yêu cầu tên người dùng',
            'email.required' => 'Yêu cầu tên email',
        ]);

        //dd($data);

        User::find($id)->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'id_role' => $data['role'],
        ]);
        return back()->with('success', 'Cập nhật thành công');
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
        User::find($id)->delete();
        return back()->with('success', 'Xóa thành công');
    }
}
