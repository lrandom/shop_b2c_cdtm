<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Image;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\Variant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PHPUnit\Exception;

class ProductController extends Controller implements ICrud
{
    //
    public function index()
    {
        // TODO: Implement index() method.
        $list = Product::orderBy('id', 'desc')->paginate(10);
        return view('be.product.index', compact('list'));
    }

    public function add()
    {
        // TODO: Implement add() method.
        $categories = \App\Models\Category::all();
        $brands = Brand::all();
        $variants = Variant::all();
        return view('be.product.add', compact('categories',
            'brands', 'variants'));
    }

    public function doAdd(Request $request)
    {
        // TODO: Implement doAdd() method.
        $name = $request->name;
        $categoryId = $request->category_id;
        $content = $request->input('txt-content');
        $price = $request->price;
        $brandId = $request->brand_id ?? 0;
        $discountType = $request->discount_type;
        $discountAmount = $request->discount_amount;
        $metaKeyword = $request->meta_keyword;
        $metaContent = $request->meta_content;
        $metaDescription = $request->meta_description;
        $shortDescription = $request->short_description;

        try {
            $product = Product::create([
                'name' => $name,
                'content' => htmlentities($content),
                'price' => $price,
                'brand_id' => $brandId,
                'discount_amount' => $discountAmount,
                'discount_type' => $discountType,
                'meta_keyword' => $metaKeyword,
                'meta_description' => $metaDescription,
                'meta_content' => $metaContent,
                'short_description' => $shortDescription,
                'category_id' => $categoryId
            ]);

            //check if product has image
            if ($request->hasFile('images')) {
                $images = $request->file('images');
                $i = 0;
                foreach ($images as $image) {
                    $newFileName = time() . $i . '.' . $image->getClientOriginalExtension();
                    try {
                        $image->storeAs('images/products',
                            $newFileName, 'public');
                        Image::create([
                            'product_id' => $product->id,
                            'path' => 'storage/images/products/' . $newFileName,
                            'is_preview' => $i == 0 ? 1 : 0
                        ]);
                    } catch (Exception $exception) {
                        dd($exception->getMessage());
                    }
                    $i++;
                }
            }

            //check if product has variant
            if ($request->has('variants')) {
                $variants = $request->variants;
                foreach ($variants as $variant) {
                    //2$|Color$|2$|Green
                    $variantArr = explode('$|', $variant);//[2,"Color",2,"Green"]
                    if (count($variantArr) == 4) {
                        $variantId = $variantArr[0];
                        $variantName = $variantArr[1];
                        $variantValueId = $variantArr[2];
                        $variantValueName = $variantArr[3];
                        ProductVariant::create([
                            'product_id' => $product->id,
                            'variant_id' => $variantId,
                            'variant_name' => $variantName,
                            'variant_value_id' => $variantValueId,
                            'variant_value_name' => $variantValueName
                        ]);
                    }

                }
            }
        } catch (\Exception $exception) {
            //dd($exception->getMessage());
            return redirect()->back()->with('error', "Add failed");
        }
        //chuyển hướng về trang  danh sách
        return redirect()->route('admin.product.list')
            ->with('success', 'Add successfully');
    }


    public function edit($id)
    {
        // TODO: Implement edit() method.
        $categories = \App\Models\Category::all();
        $product = Product::find($id);//lấy ra product có id là $id truyền vào
        $brands = Brand::all();
        $variants = Variant::all();

        $variantValueIds = $product->variantValues->toArray();
        $variantValueIdsArr = [];
        foreach ($variantValueIds as $variantValueIdObj) {
            // echo $variantValueIdObj['id'];
            $variantValueIdsArr[] = $variantValueIdObj['id'];//id of variant_value
        }

        //dd($variantValueIdsArr);
        return view('be.product.edit', compact('product',
            'categories', 'brands', 'variants', 'variantValueIdsArr'));
    }

    public function doEdit($id, Request $request)
    {
        // TODO: Implement doEdit() method.
        // TODO: Implement doAdd() method.
        $name = $request->name;
        $categoryId = $request->category_id;
        $content = $request->input('txt-content');
        $price = $request->price;
        $brandId = $request->brand_id ?? 0;
        $discountType = $request->discount_type;
        $metaKeyword = $request->meta_keyword;
        $metaContent = $request->meta_content;
        $metaDescription = $request->meta_description;
        $shortDescription = $request->short_description;
        $discountAmout = $request->discount_amount;

        try {
            Product::where('id', $id)->update([
                'name' => $name,
                'content' => htmlentities($content),
                'price' => $price,
                'brand_id' => $brandId,
                'discount_amount' => $discountAmout,
                'discount_type' => $discountType,
                'meta_keyword' => $metaKeyword,
                'meta_description' => $metaDescription,
                'meta_content' => $metaContent,
                'short_description' => $shortDescription,
                'category_id' => $categoryId
            ]);

            //check if product has image
            if ($request->hasFile('images')) {
                //xoá ảnh cũ đi
                $savedImages = Image::where('product_id', $id)->get();
                foreach ($savedImages as $savedImage) {
                    Storage::delete($savedImage->path);
                    $savedImage->delete();
                }

                $images = $request->file('images');
                $i = 0;
                foreach ($images as $image) {
                    $newFileName = time() . $i . '.' . $image->getClientOriginalExtension();
                    try {
                        $image->storeAs('images/products',
                            $newFileName, 'public');
                        Image::create([
                            'product_id' => $id,
                            'path' => 'storage/images/products/' . $newFileName,
                            'is_preview' => $i == 0 ? 1 : 0
                        ]);
                    } catch (Exception $exception) {

                    }
                    $i++;
                }
            }


            if ($request->has('variants')) {
                $variants = $request->variants;
                //delete old data
                ProductVariant::where('product_id', $id)
                    ->delete();

                foreach ($variants as $variant) {
                    //2$|Color$|2$|Green
                    $variantArr = explode('$|', $variant);//[2,"Color",2,"Green"]
                    if (count($variantArr) == 4) {
                        $variantId = $variantArr[0];
                        $variantName = $variantArr[1];
                        $variantValueId = $variantArr[2];
                        $variantValueName = $variantArr[3];


                        ProductVariant::create([
                            'product_id' => $id,
                            'variant_id' => $variantId,
                            'variant_name' => $variantName,
                            'variant_value_id' => $variantValueId,
                            'variant_value_name' => $variantValueName
                        ]);
                    }

                }
            }

        } catch (\Exception $exception) {
            return redirect()->back()->with('error', "Update failed");
        }
        //chuyển hướng về trang  danh sách
        return redirect()->route('admin.product.list')->with('success', 'Update successfully');
    }


    public function delete($id)
    {
        // TODO: Implement delete() method.
        try {
            $product = Product::find($id);
            $product->delete();
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', "Delete failed");
        }
        return redirect()->back()->with('success', "Delete successfully");
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $list = Product::where('name', 'like', "%$query%")
            ->orWhere('price', 'like', "%$query%")
            ->orWhere('short_description', 'like', "%$query%")
            ->orWhere('content', 'like', "%$query%")
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('be.product.index', compact('list'));
    }
}

