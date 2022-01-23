<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller implements ICrud
{
    public function index()
    {
        // TODO: Implement index() method.
        $list = Brand::orderBy('id', 'desc')->paginate(10);
        return view('be.brand.index', compact('list'));
    }

    public function add()
    {
        // TODO: Implement add() method.
        return view('be.brand.add');
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
        $brand = Brand::find($id);//lấy ra category có id là $id truyền vào
        return view('be.brand.edit', compact('brand'));
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
        // TODO: Implement doAdd() method.
        // TODO: Implement doAdd() method.
        $name = $request->name;
        try {


            $brand = Brand::find($id);
            $brand->name = $name;
            $brand->save();
            if ($request->file('logo')) {
                //delete old file
                if ($brand->logo_path)
                    \Storage::disk('public')->delete($brand->logo_path);
            }

            //upload logo
            if ($request->file('logo')) {
                $file = $request->file('logo');
                $logoFileName = $id . $file->getClientOriginalName();
                $file->storeAs('images/brand/logo', $logoFileName, 'public');
                $brand->logo_path = 'storage/images/brand/logo/' . $logoFileName;
                $brand->save();
            }

        } catch (\Exception $exception) {
            return redirect()->back()->with('error', "Edit failed");
        }

        //chuyển hướng về trang  danh sách
        return redirect()->route('admin.brand.list')->with('success', 'Edit successfully');
    }

}
