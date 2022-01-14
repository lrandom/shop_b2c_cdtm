<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller implements ICrud
{
    public function index()
    {
        // TODO: Implement index() method.
    }

    public function add()
    {
        // TODO: Implement add() method.
        return view('be.brand.add');
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
            $brand = Brand::create([
                'name' => $name
            ]);

            if ($request->file('logo')) {
                //upload logo
                $file = $request->file('logo');
                $logoFileName = $brand->id . $file->getClientOriginalName();
                $file->storeAs('images/brand/logo', $logoFileName, 'public');
                $brand->logo_path = 'storage/images/brand/logo/' . $logoFileName;
                $brand->save();
            }
        } catch (\Exception $exception) {
            dd($exception->getMessage());
            return redirect()->back()->with('error', "Add failed");
        }
        //chuyển hướng về trang  danh sách
        return redirect()->route('admin.brand.list')->with('success', 'Add successfully');
    }

    public function doEdit($id, Request $request)
    {
        // TODO: Implement doEdit() method.
    }

}
