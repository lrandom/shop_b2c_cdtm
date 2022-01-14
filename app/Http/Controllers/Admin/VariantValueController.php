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
        $list = VariantValue::orderBy('id', 'desc')->paginate(10);
        return view('be.variant_value.index', compact('list'));
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
        $variants = Variant::all();
        $variantValue = VariantValue::find($id);
        return view('be.variant_value.edit', compact('variants', 'variantValue'));
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        try {
            $variantValue = VariantValue::find($id);
            $variantValue->delete();
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', "Delete failed");
        }
        return redirect()->back()->with('success', "Delete successfully");
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
        try {
            VariantValue::where('id', $id)->update([
                'value' => $request->variant_value,
                'variant_id' => $request->variant_id
            ]);
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', "Update failed");
        }
        //chuyển hướng về trang  danh sách
        return redirect()->route('admin.variant_value.list')->with('success', 'Update successfully');
    }

}
