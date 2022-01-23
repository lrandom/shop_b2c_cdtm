<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    const SESSION_CART = 'cart';


    public function addToCart(Request $request)
    {
        $id = $request->id;
        $quantity = $request->quantity;
        //$variantValues = $request->variantValues;
        $product = Product::find($id);
        $cart = Session::has(self::SESSION_CART) ?
            Session::get(self::SESSION_CART)
            : [];

        /*        $cart = [
                    [
                        'id' => $product->id,
                        'name' => $product->name,
                        'price' => $product->price,
                        'quantity' => 1,
                        'variantValues' => $request->variantValues
                    ],
                    [
                        'id' => $product->id,
                        'name' => $product->name,
                        'price' => $product->price,
                        'quantity' => 1,
                        'variantValues' => $request->variantValues
                    ]
                ];*/

        $cartCollect = collect($cart);

        //tìm kiếm một sản phẩm trong giỏ hàng mà có id = id truyền lên
        $cartItem = $cartCollect->first(function ($item) use ($id) {
            return $item->id == $id;
        });
        if ($cartItem) {
            //đã tồn tại sp trong giỏ hàng
            //tăng số lượng lên 1
        } else {
            //chưa có sp trong giỏ hàng
            //thêm sp vào trong giỏ hàng
            array_push($cart, [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => $quantity,
                //'variantValues' => $request->variantValues
            ]);
        }

        //cập nhật lại giỏ hàng
        Session::put(self::SESSION_CART, $cart);
        return response()->json(['cart' => $cart], 200);
    }

    public function removeFromCart()
    {
        return 'CartController@index';
    }

    public function updateCart()
    {
        return 'CartController@index';
    }

    public function getCart()
    {
        $cart = Session::has(self::SESSION_CART) ?
            Session::get(self::SESSION_CART)
            : [];
        return response()->json(['cart' => $cart], 200);
    }
}
