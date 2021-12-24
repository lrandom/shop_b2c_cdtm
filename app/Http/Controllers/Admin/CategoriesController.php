<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class CategoriesController extends Controller implements ICrud
{
    //
    public function index()
    {
        // TODO: Implement index() method.
        $list = Category::orderBy('id', 'desc')->paginate(10);
        return view('be.category.index', compact('list'));
    }

    public function add()
    {
        // TODO: Implement add() method.
        return view('be.category.add');
    }

    public function doAdd(Request $request)
    {
        // TODO: Implement doAdd() method.
        $name = $request->name;
        try {
            Category::create([
                'name' => $name,
            ]);
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', "Add failed");
        }
        //chuyển hướng về trang  danh sách
        return redirect()->route('admin.category.list')->with('success', 'Add successfully');
    }


    public function edit($id)
    {
        // TODO: Implement edit() method.
        $category = Category::find($id);//lấy ra category có id là $id truyền vào
        return view('be.category.edit', compact('category'));
    }

    public function doEdit($id, Request $request)
    {
        // TODO: Implement doEdit() method.
        $name = $request->name;
        try {
            Category::where('id', $id)->update([
                'name' => $name
            ]);
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', "Update failed");
        }
        //chuyển hướng về trang  danh sách
        return redirect()->route('admin.category.list')->with('success', 'Update successfully');
    }


    public function delete($id)
    {
        // TODO: Implement delete() method.
        try {
            $category = Category::find($id);
            $category->delete();
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', "Delete failed");
        }
        return redirect()->back()->with('success', "Delete successfully");
    }

}

