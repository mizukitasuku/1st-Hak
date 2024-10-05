<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.user_index');
    }

    public function edit()
    {
        return view('user.user_edit');
    }

    public function editList()
    {
        return view('user.edit.user_edit_list');
    }

    public function editEmail()
    {
        return view('user.edit.user_edit_email');
    }

    public function editPassword()
    {
        return view('user.edit.user_edit_password');
    }

    public function editPhoto()
    {
        return view('user.edit.user_edit_photo');
    }

    public function editComplete()
    {
        return view('user.edit.user_edit_complete');
    }
}
