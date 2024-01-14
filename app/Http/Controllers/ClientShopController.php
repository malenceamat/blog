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
        $items = Shop::with('tovar')->get();

        foreach ($items as $item) {
            $item['price_discount'] = $item->price - ($item->price * $item->tovar[0]->discount / 100); // обычная скидка




            /*$count = $discount_price - ($discount_price * $item->tovar[0]->count / 100); //расписать через if скидку от количества
            $item['price_discount'] = $count - ($count * $item->tovar[0]->delivery / 100); // раписать если есть доставка и если нету
            $start = Shop::with('tovar')->first()->tovar[0]->start; // расписать временную скидку
            $end = Shop::with('tovar')->first()->tovar[0]->end;     // расписать временную скидку*/


        }

        $count = Shop::with('tovar')->first()->tovar[0]->count;
        $delivery = Shop::with('tovar')->first()->tovar[0]->delivery;
        $start = Shop::with('tovar')->first()->tovar[0]->start;
        $end = Shop::with('tovar')->first()->tovar[0]->end;

        $dataprice = Shop::with('tovar')->find(4);

        return view('shop.client.shop-view', compact('items'));
    }
}
