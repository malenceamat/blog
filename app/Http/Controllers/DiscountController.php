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
        return view('shop.discount', compact('dis'));
    }

    /*public function create(Request $req)
    {
        $dis = Discount::create($req->all());
        return redirect('redshop');
    }*/
    public function update(Request $req)
    {


        $discount = Discount::updateOrCreate(['id' => $req->id], $req->except('_token', '_method'));

        $tovar = Shop::find($req->id);

        $tovar->tovar()->attach($discount->id);


        return redirect('redshop');
    }

}
