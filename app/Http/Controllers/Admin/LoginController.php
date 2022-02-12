<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('be.login');
    }

    public function doLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        //check đăng nhập thành công và là admin
        if (\Auth::attempt($credentials) && \Auth::user()->level == 'admin') {
            //dd("test");
            return redirect()->route('admin.user.list');
        }

        return back()->withErrors([
            'error' => 'Login not successfully'
        ]);
    }
}
