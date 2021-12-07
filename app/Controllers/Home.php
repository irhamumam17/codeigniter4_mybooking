<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('landing/index');
    }
    public function dashboard()
    {
        return view('admin/index');
    }
}
