<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DiscountController extends Controller
{
    public function index($id = null)
    {
        $dis = $id ? Discount::find($id) : new Discount();
        return view('shop.discount',compact('dis'));
    }
    public function create(Request $req)
    {
        Discount::create($req->all());
        return redirect('redshop');
    }
    public function update(Request $req)
    {


        Discount::updateOrCreate(['id' => $req->id],$req->except('_token','_method'));



        return redirect('redshop');
    }

}
