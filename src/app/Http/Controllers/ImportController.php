<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImportController extends Controller
{
    public function index()
    {
        return view('import.import_index');
    }

    public function confirm()
    {
        return view('import.import_confirm');
    }

    public function complete()
    {
        return view('import.import_complete');
    }
}
