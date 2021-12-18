<?php

namespace App\Http\Controllers\Admin;




use Illuminate\Http\Request;

interface ICrud
{
    public function index();

    public function add();

    public function edit();

    public function delete();

    public function doAdd(Request $request);

    public function doEdit();
}
