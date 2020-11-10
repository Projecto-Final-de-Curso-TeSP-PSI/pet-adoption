<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('dashboard1');
    }
    public function dashboard2()
    {
        return view('dashboard2');
    }
    public function dashboard3()
    {
        return view('dashboard3');
    }
}
