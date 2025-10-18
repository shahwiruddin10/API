<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataDosenController extends Controller
{
    // index 
    public function index() //class
    {
        return view('datadosen.datadosen');
    }

    public function create()
    {
        return view('datadosen.create4');
    }
}
