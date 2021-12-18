<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller implements ICrud
{
    //
    public function index()
    {
        // TODO: Implement index() method.
        return view('be.user.index');
    }

    public function add()
    {
        // TODO: Implement add() method.
        return view('be.user.add');
    }

    public function doAdd(Request $request)
    {
        // TODO: Implement doAdd() method.
        $email = $request->email;
        $fullName = $request->full_name;
        $phone = $request->phone;
        $password = $request->password;
        try {
            User::create([
                'email' => $email,
                'full_name' => $fullName,
                'phone' => $phone,
                'name' => $email,
                'password' => Hash::make($password)
            ]);
        }catch (\Exception $exception){
            return redirect()->back()->with('error', "Thêm thất bại");
        }


        //chuyển hướng về trang  danh sách
        return redirect()->route('admin.user.list')->with('success', 'Thêm mới thành công');
    }


    public function edit()
    {
        // TODO: Implement edit() method.
    }

    public function doEdit()
    {
        // TODO: Implement doEdit() method.
    }


    public function delete()
    {
        // TODO: Implement delete() method.
    }

}
