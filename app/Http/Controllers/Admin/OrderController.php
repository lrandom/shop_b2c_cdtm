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
        // TODO: Implement index() method.
        $list = Order::orderBy('id', 'asc')
            ->paginate(10);
        return view('be.order.index', compact('list'));
    }

    public function detail($id)
    {
        $order = Order::find($id);
        return view('be.order.detail',compact('order'));
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

}
