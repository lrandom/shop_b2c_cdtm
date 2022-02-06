<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
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
        $authedUser = \Auth::user();//trả về thông tin của user đã đăng nhập
        return view('fe.order.checkout', compact('authedUser'));
    }

    public function doCheckout(Request $request)
    {
        $fullName = $request->full_name;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address;
/*        $cartController = new CartController();
        $cartPrice = $cartController->getCartPrice();

        try {
            DB::beginTransaction();
            //tạo đơn hàng
            $order = Order::create([
                'full_name' => $fullName,
                'email' => $email,
                'phone' => $phone,
                'address' => $address,
                'total' => $cartPrice['total_price'],
                'sub_total' => $cartPrice['sub_total'],
                'tax' => $cartPrice['tax'],
                'user_id' => \Auth::user()->id
            ]);

            //lưu thông tin sản phẩm vào bảng order_detail
            $cart = isset($_SESSION[self::SESSION_CART])
                ? $_SESSION[self::SESSION_CART] : [];

            foreach ($cart as $product) {
                OrderDetail::create([
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'price' => $product->price,
                    'quantity' => $product->quantity,
                    'total_price' => $product->price * $product->quantity
                ]);
            }

            DB::commit();//đẩy thực vào CSDL
            return redirect()->route('fe.checkout.success', ['order_id' => $order->id]);
        } catch (\Exception $exception) {
            DB::rollBack();//quay lại thời điẻm ban đầu
            //đưa ra thông báo lỗi đến người dùng
        }*/
    }

    public function checkoutSuccess($orderId)
    {
        return view('fe.order.checkout-success', compact('orderId'));
    }
}
