<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class AuthedUserController extends Controller
{
    public function profile()
    {
        return view('fe.user.profile');
    }

    public function changePassword()
    {
        return view('fe.user.change-password');
    }

    public function myOrders(Request $request)
    {
        $user = \Auth::user();
        // TODO: Implement index() method.
        $status = $request->query('status');
        $query = Order::orderBy('id', 'asc')->where('user_id', $user->id);
        if ($status) {
            switch ($status) {
                case "pending":
                    $query->where('status', 1);
                    break;

                case "processing":
                    $query->where('status', 2);
                    break;

                case "success":
                    $query->where('status', 3);
                    break;

                case "canceled":
                    $query->where('status', 4);
                    break;
            }
            $list = $query
                ->paginate(10);
        } else {
            // TODO: Implement index() method.
            $list = Order::orderBy('id', 'asc')
                ->where('user_id', $user->id)
                ->paginate(10);
        }
        return view('fe.user.my-orders',compact('list'));
    }

    public function orderDetail()
    {
    }
}
