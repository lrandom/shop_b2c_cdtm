<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function detail($id)
    {
        $product = Product::find($id);
        $suggestProducts = Product::where('id', '<>', $id)->
        inRandomOrder()->limit(4)->get();

        $variantValues = $product->variantValues;
        $variantValues = $variantValues->groupBy('variant_id');
        //dd($variantValues);

        return view('fe.product.detail', compact('product',
            'suggestProducts','variantValues'));
    }

}
