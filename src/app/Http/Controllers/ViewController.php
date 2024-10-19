<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        return view('view.view_index');
    }

    public function detail()
    {
        return view('view.view_detail');
    }
}
