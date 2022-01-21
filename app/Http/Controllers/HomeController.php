<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $featureProducts = Product::where('is_feature', 1)->take(8)->get();
        $newProducts = Product::orderBy('created_at', 'desc')->take(8)->get();
        $brands = Brand::all();
        return view('fe.home',
            compact('featureProducts',
                'brands',
                'newProducts'));
    }

    public function category($id)
    {
        $products = Product::where('category_id', $id)->paginate(12);
        $category = Category::find($id);
        return view('fe.category',
            compact('products', 'category'));
    }

    public function search(Request $request)
    {
        $q = $request->query('q');
        $products = Product::where('name', 'like', '%' . $q . '%')
            ->orWhere('short_description', 'like', '%' . $q . '%')
            ->paginate(12);
        return view('fe.search', compact('products', 'q'));
    }

    public function about()
    {

    }

    public function contact()
    {

    }
}
