<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.register_index');
    }

    public function complete()
    {
        return view('register.register_complete');
    }
}
