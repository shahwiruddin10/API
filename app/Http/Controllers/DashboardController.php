<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Index
    public function index() // class
    {
        return view('welcome');
    }
}
