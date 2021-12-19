<?php

namespace App\Http\Controllers\Admin;




use Illuminate\Http\Request;

interface ICrud
{
    public function index();

    public function add();

    public function edit($id);

    public function delete($id);

    public function doAdd(Request $request);

    public function doEdit($id, Request $request);
}
