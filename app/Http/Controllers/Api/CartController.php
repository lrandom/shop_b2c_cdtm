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
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function addToCart(Request $request)
    {
        $id = $request->id;
        $quantity = $request->quantity;
        //$variantValues = $request->variantValues;
        $variantInfos = $request->variant_infos;
        //dd($variantInfos);
        if ($variantInfos) {
            $variantInfos = $this->removeVariantAssocKey($variantInfos);
        }
        //$variantInfos = $tmpVariantsInfo;
        //dd($variantInfos);

        $product = Product::find($id);


        $cart = isset($_SESSION[self::SESSION_CART])
            ? $_SESSION[self::SESSION_CART] : [];

        $cartCollect = collect($cart);


        $simpleVariantInfos = $this->makeVariantInfosSimple($variantInfos);

        $cartItem = false;
        if ($request->variant_infos) {
            $cartItem = $cartCollect->first(function ($item) use ($id, $simpleVariantInfos) {
                $simpleVariantInfosInCart = $this->makeVariantInfosSimple($item['variantInfos']);
                return $item['id'] == $id && count(array_diff_assoc($simpleVariantInfosInCart,
                        $simpleVariantInfos)) == 0;
            });
        } else {
            $cartItem = $cartCollect->first(function ($item) use ($id) {
                return $item['id'] == $id;
            });
        }
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
                'variantInfos' => $variantInfos
                //'variantValues' => $request->variantValues
            ]);
        }

        //cập nhật lại giỏ hàng
        //Session::put(self::SESSION_CART, $cart);
        $_SESSION[self::SESSION_CART] = $cart;
        return response()->json(['cart' => $cart], 200);
    }

    private function makeVariantInfosSimple($variantInfos)
    {

        $data = [];
        foreach ($variantInfos as $variantInfo) {
            $data[$variantInfo[0]['variant_id']] = $variantInfo[0]['variant_value_id'];
        }
        return $data;
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
        $variantInfos = $request->variantInfos;
        $cart = isset($_SESSION[self::SESSION_CART])
            ? $_SESSION[self::SESSION_CART] : [];
        $cartCollection = collect($cart);
        $cart = $cartCollection->filter(function ($item) use ($deleteItem, $variantInfos) {
            if ($item['id'] != $deleteItem || count(array_diff_assoc(
                    $this->makeVariantInfosSimple($variantInfos)
                    , $this->makeVariantInfosSimple($item['variantInfos']))) != 0) {
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
        $variantInfos = $request->variantInfos;
        $quantity = $request->quantity;
        $cart = isset($_SESSION[self::SESSION_CART])
            ? $_SESSION[self::SESSION_CART] : [];
        $cartCollection = collect($cart);
        $cart = $cartCollection->map(function ($item) use ($id, $quantity, $variantInfos) {
            if ($item['id'] == $id && count(array_diff_assoc(
                    $this->makeVariantInfosSimple($variantInfos)
                    , $this->makeVariantInfosSimple($item['variantInfos']))) == 0
            ) {
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

    public function clearCart()
    {
        $_SESSION[self::SESSION_CART] = [];
        return response()->json(['total_items' => 0], 200);
    }

    /**
     * @param $variantInfos
     * @return array
     */
    public function removeVariantAssocKey($variantInfos): array
    {
        $variantInfos = collect($variantInfos);
        $variantInfos = $variantInfos->groupBy('variant_id');
        $variantInfos = $variantInfos->toArray();
        $tmpVariantsInfo = [];
        foreach ($variantInfos as $key => $variantInfo) {
            $tmpVariantsInfo[] = $variantInfo;
        }
        return $tmpVariantsInfo;
    }
}
