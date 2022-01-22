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
        return view('fe.product.detail', compact('product'));
    }
}
