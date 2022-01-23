<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller implements ICrud
{
    //
    public function index()
    {
        // TODO: Implement index() method.
    }

    public function add()
    {
        // TODO: Implement add() method.
        $categories = Category::all();
        return view('be.post.add', compact('categories'));
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
