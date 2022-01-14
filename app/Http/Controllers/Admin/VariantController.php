<?php

namespace App\Http\Controllers\Admin;

use App\Models\Variant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VariantController extends Controller implements ICrud
{
    //
    public function index()
    {
        // TODO: Implement index() method.
    }

    public function add()
    {
        // TODO: Implement add() method.
        return view('be.variant.add');
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function doAdd(Request $request)
    {
        // TODO: Implement doAdd() method.
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
    }

}
