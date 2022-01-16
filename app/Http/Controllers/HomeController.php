<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
class HomeController extends Controller
{
    public function index()
    {
        $featureProducts = Product::where('is_feature', 1)->take(8)->get();
        $newProducts = Product::orderBy('created_at', 'desc')->take(8)->get();
        return view('fe.layout',compact('featureProducts','newProducts'));
    }

    public function about()
    {

    }

    public function contact()
    {

    }
}
