<?php

namespace App\Http\Controllers;


use App\Models\Shop;
use App\Models\sliders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ShopController extends Controller
{
    public function index($id = null)
    {
        $shop = $id ? Shop::find($id) : new Shop();
        return view('shop.editshop',compact('shop'));
    }
    public function create(Request $req)
    {
        $data = new Shop();
        $path = Storage::disk('public')->putFile('image', $req->file('image'));
        $data -> image = $path;
        $data -> name = $req->name;
        $data-> price = $req->price;
        $data -> description = $req -> description;
        $data->save();
        return redirect('obzorshop');
    }
    public function show()
    {
        $card = Shop::get();
        return view('shop.redshop',compact('card'));
    }
    public function delete($id)
    {
        $delete = Shop::find($id);
        Storage::disk('public')->delete('image', $delete['image']);
        $delete->delete();
        return redirect('redshop');
    }
    public function update(Request $req)
    {
        $card = Shop::find($req->id);
        $card->description = $req->description;
        $card->name = $req->name;
        $card->price = $req->price;
        if (request()->has('image'))
        {$path = Storage::disk('public')->put('image', $req->file('image'));
            $card->image = $path;}
        $card->save();

        if ($req['image']) {
            if ($req['image'] == $card['image']) {
                Storage::disk('public')->delete('image', $card['image']);
                $card ['image'] =
                    Storage::disk('public')->put('image', $req['image']);
            }
        }
        $card->save();
        return redirect('redshop');
    }
}
