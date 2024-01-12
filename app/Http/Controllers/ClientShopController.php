<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use App\Models\razdel;
use App\Models\Shop;
use Illuminate\Http\Request;

class ClientShopController extends Controller
{
    public function index()
    {

        $data = Shop::with('tovar')->get();

        $product = Shop::with('tovar')->first()->tovar[0]->discount;

        dd($product);
        return view('shop.client.shop-view',compact('data'));
    }

}
