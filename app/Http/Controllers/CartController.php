<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

use App\Models\Product;

class CartController extends Controller
{
    public function list()
    {
        return view('fe.cart.list');
    }
}

?>
