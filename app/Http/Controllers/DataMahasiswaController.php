<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataMahasiswaController extends Controller
{
    // index 
    public function index() //class
    {
        return view('datamahasiswa.datamahasiswa');
    }

    public function create()
    {
        return view('datamahasiswa.create3');
    }
}
