<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('contentadmin.contentadmin');
    }
    public function index2()
    {
        return view('gallery');
    }
}
