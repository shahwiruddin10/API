<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataFakultasController extends Controller
{
    public function index()
    {
        return view('datafakultas.datafakultas');
    }

    public function create()
    {
        return view('datafakultas.create');
    }
}