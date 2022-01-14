<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Variant;
use App\Models\VariantValue;
use Illuminate\Http\Request;

class VariantValueController extends Controller implements ICrud
{
    //
    public function index()
    {
        // TODO: Implement index() method.
    }

    public function add()
    {
        // TODO: Implement add() method.
        $variants = Variant::all();
        return view('be.variant_value.add', compact('variants'));
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
        try {
            VariantValue::create([
                'value' => $request->variant_value,
                'variant_id' => $request->variant_id
            ]);
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', "Add failed");
        }
        //chuyển hướng về trang  danh sách
        return redirect()->route('admin.variant_value.list')->with('success', 'Add successfully');
    }

    public function doEdit($id, Request $request)
    {
        // TODO: Implement doEdit() method.
    }

}
