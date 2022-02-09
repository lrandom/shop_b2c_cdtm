<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller implements ICrud
{
    public function index()
    {

    }

    public function filter(Request $request)
    {
        // TODO: Implement index() method.
        $status = $request->status ?? null;
        $query = Order::orderBy('id', 'asc');
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
                ->paginate(10);
        }
        return view('be.order.index', compact('list'));
    }

    public function detail($id)
    {
        $order = Order::find($id);
        return view('be.order.detail', compact('order'));
    }

    public function add()
    {
        // TODO: Implement add() method.
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function doAdd(Request $request)
    {
        // TODO: Implement doAdd() method.
    }

    public function doEdit($id, Request $request)
    {
        // TODO: Implement doEdit() method.
    }

    public function changeStatus($id, $status)
    {
        //thay đổi trạng thái đơn hàng
        $order = Order::find($id);
        $order->status = $status;
        $order->save();
        return redirect()->back();//quay lại điểm gọi request
    }

}
