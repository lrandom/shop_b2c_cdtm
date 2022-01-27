<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    //

    public function __construct()
    {
        session_start();
    }

    public function checkout()
    {
        return view('fe.order.checkout');
    }

    public function makeOrder()
    {

    }
}
