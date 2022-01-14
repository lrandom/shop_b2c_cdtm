<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Variant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VariantController extends Controller implements ICrud
{
    //
    public function index()
    {
        // TODO: Implement index() method.
        $list = Variant::orderBy('id', 'desc')->paginate(10);
        return view('be.variant.index', compact('list'));
    }

    public function add()
    {
        // TODO: Implement add() method.
        return view('be.variant.add');
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
        $variant = Variant::find($id);
        return view('be.variant.edit', compact('variant'));
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        try {
            $variant = Variant::find($id);
            $variant->delete();
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', "Delete failed");
        }
        return redirect()->back()->with('success', "Delete successfully");
    }

    public function doAdd(Request $request)
    {
        // TODO: Implement doAdd() method.
        $name = $request->name;
        try {
            Variant::create([
                'name' => $name
            ]);
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', "Add failed");
        }
        //chuyển hướng về trang  danh sách
        return redirect()->route('admin.variant.list')->with('success', 'Add successfully');
    }

    public function doEdit($id, Request $request)
    {
        // TODO: Implement doEdit() method.
        $name = $request->name;
        try {
            Variant::where('id', $id)->update([
                'name' => $name
            ]);
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', "Update failed");
        }
        //chuyển hướng về trang  danh sách
        return redirect()->route('admin.variant.list')->with('success', 'Update successfully');
    }

}
