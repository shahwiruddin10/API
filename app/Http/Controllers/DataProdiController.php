<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataProdiController extends Controller
{
    public function index()
    {
        return view('dataprodi.dataprodi');
    }

    public function create()
    {
        return view('dataprodi.create2');
    }
}
