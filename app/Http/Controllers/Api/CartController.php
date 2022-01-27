<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Product;

class CartController extends Controller
{
    const SESSION_CART = 'cart';

    public function __construct()
    {
        session_start();
    }


    public function addToCart(Request $request)
    {
        $id = $request->id;
        $quantity = $request->quantity;
        //$variantValues = $request->variantValues;
        $product = Product::find($id);
        /*     $cart = Session::has(self::SESSION_CART) ?
                 Session::get(self::SESSION_CART)
                 : [];*/

        /* $cart = Session::has(self::SESSION_CART) ?
             Session::get(self::SESSION_CART)
             : [];*/

        $cart = isset($_SESSION[self::SESSION_CART])
            ? $_SESSION[self::SESSION_CART] : [];

        /*        $cart = [
                    id=>[
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

        //dd($cart);
        //tìm kiếm một sản phẩm trong giỏ hàng mà có id = id truyền lên
        $cartItem = $cartCollect->first(function ($item) use ($id) {
            return $item['id'] == $id;
        });
        if ($cartItem) {
            //đã tồn tại sp trong giỏ hàng
            //tăng số lượng lên 1
            $cartItem['quantity'] = $cartItem['quantity'] + $quantity;
            $cart = $cartCollect->map(function ($item) use ($id, $cartItem) {
                if ($item['id'] == $id) {
                    return $cartItem;
                }
                return $item;
            });
            $cart = $cart->toArray();
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
        //Session::put(self::SESSION_CART, $cart);
        $_SESSION[self::SESSION_CART] = $cart;
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
        $cart = isset($_SESSION[self::SESSION_CART])
            ? $_SESSION[self::SESSION_CART] : [];
        return response()->json(['cart' => $cart], 200);
    }

    public function getTotalItems()
    {
        $cart = isset($_SESSION[self::SESSION_CART])
            ? $_SESSION[self::SESSION_CART] : [];

        $calcPriceInCart = $this->calcPriceInCart();
        return response()->json([
            'total_items' => count($cart),
            'price_in_cart' => $calcPriceInCart
        ], 200);
    }

    public function calcPriceInCart()
    {
        $cart = isset($_SESSION[self::SESSION_CART])
            ? $_SESSION[self::SESSION_CART] : [];
        $subTotal = 0;
        foreach ($cart as $item) {
            $subTotal += $item['price'] * $item['quantity'];
        }
        $tax = ($subTotal * 10 / 100);
        $totalPrice = $subTotal + $tax;
        return [
            'sub_total' => $subTotal,
            'tax' => $tax,
            'total_price' => $totalPrice
        ];
    }

    public function deleteItem(Request $request)
    {
        $deleteItem = $request->id;
        $cart = isset($_SESSION[self::SESSION_CART])
            ? $_SESSION[self::SESSION_CART] : [];
        $cartCollection = collect($cart);
        $cart = $cartCollection->filter(function ($item) use ($deleteItem) {
            if ($item['id'] != $deleteItem) {
                return $item;
            }
        });
        $cart = $cart->toArray();
        $_SESSION[self::SESSION_CART] = $cart;
        return response()->json(['total_items' => count($cart)], 200);
    }

    public function updateQuantity(Request $request)
    {
        $id = $request->id;
        $quantity = $request->quantity;
        $cart = isset($_SESSION[self::SESSION_CART])
            ? $_SESSION[self::SESSION_CART] : [];
        $cartCollection = collect($cart);
        $cart = $cartCollection->map(function ($item) use ($id, $quantity) {
            if ($item['id'] == $id) {
                if ($item['quantity'] == 1 && $quantity == -1) {
                    return $item;
                }
                $item['quantity'] = $item['quantity'] + $quantity;
            }
            return $item;
        });
        $cart = $cart->toArray();
        $_SESSION[self::SESSION_CART] = $cart;
        return response()->json(['total_items' => count($cart)], 200);
    }

}
