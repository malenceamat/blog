<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientShopController extends Controller
{
    public function index()
    {
        return view('shop.client.shop-view');
    }
}
