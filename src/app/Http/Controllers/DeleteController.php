<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function index()
    {
        return view('delete.delete_index');
    }

    public function confirm()
    {
        return view('delete.delete_confirm');
    }

    public function complete()
    {
        return view('delete.delete_complete');
    }
}
