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
        $list = User::orderBy('id', 'desc')->paginate(10);
        return view('be.user.index', compact('list'));
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
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', "Add failed");
        }


        //chuyển hướng về trang  danh sách
        return redirect()->route('admin.user.list')->with('success', 'Add successfully');
    }


    public function edit($id)
    {
        // TODO: Implement edit() method.
        $user = User::find($id);//lấy ra user có id là $id truyền vào
        return view('be.user.edit', compact('user'));
    }

    public function doEdit($id, Request $request)
    {
        // TODO: Implement doEdit() method.
        $email = $request->email;
        $fullName = $request->full_name;
        $phone = $request->phone;
        $password = $request->password;
        try {
            User::where('id', $id)->update([
                'email' => $email,
                'full_name' => $fullName,
                'phone' => $phone,
                'name' => $email,
                'password' => Hash::make($password)
            ]);
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', "Update failed");
        }
        //chuyển hướng về trang  danh sách
        return redirect()->route('admin.user.list')->with('success', 'Update successfully');
    }


    public function delete($id)
    {
        // TODO: Implement delete() method.
        try {
            $user = User::find($id);
            $user->delete();
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', "Delete failed");
        }
        return redirect()->back()->with('success', "Delete successfully");
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $list = User::where('full_name', 'like', "%$query%")
            ->orWhere('email', 'like', "%$query%")
            ->orWhere('phone', 'like', "%$query%")
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('be.user.index', compact('list'));
    }

}
