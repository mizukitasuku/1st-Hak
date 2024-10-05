<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function forgot()
    {
        return view('password.password_forgot');
    }

    public function email()
    {
        return view('password.password_email');
    }
}
