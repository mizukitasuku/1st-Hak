<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditController extends Controller
{
    public function index()
    {
        return view('edit.edit_index');
    }

    public function list()
    {
        return view('edit.edit_list');
    }

    public function confirm()
    {
        return view('edit.edit_confirm');
    }

    public function complete()
    {
        return view('edit.edit_complete');
    }
}