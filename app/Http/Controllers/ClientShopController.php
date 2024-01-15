<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use App\Models\razdel;
use App\Models\Shop;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClientShopController extends Controller
{
    public function index()
    {
        $items = Shop::with('tovar')->get();

        foreach ($items as $item) {
            $discount_price = 25; // обычная скидка на товар
            $number = 3; // количество товаров купленные в магазине
            $counts = 5; // количество товаров для скидки
            $delivery = 1; //наличие доставки
            $delivery_discount = 25; //процент скидки с доставки
            $date_discount = 25; //процент скидки в временном промежутке

            $currentDateTime = Carbon::now()->tz('Europe/Moscow'); // получаем текущую дату и время
            $startDateTime = Carbon::parse('2024-01-15 00:00:00'); //Начальная дата и время скидки
            $endDateTime = Carbon::parse('2024-01-31 23:59:59'); // Конечная дата и время скидки

            if ($discount_price >= 1) {
                $item['price_discount'] = $item->price - ($item->price * $item->tovar[0]->discount / 100); // обычная скидка (1)
            } else {
                $item['price_discount'] = $item->price; //если скидки нет, то берется обычная цена
            }
            if ($number >= $counts) {
                $count = $item['price_discount'] - ($item['price_discount'] * $item->tovar[0]->count / 100);//скидка на процент если товаров >= числа из админки (2)
            } else {
                $count = $item['price_discount']; //скидка на процент из админки если товаров < и != количества при покупке
            }
            if ($delivery === 1) {
                $delivery_price = $count - ($count * $item->tovar[0]->delivery_discount / 100); //если есть доставка, то выполняется скидка (3)
            } else {
                $delivery_price = $count;  //если нету доставки, то присваивается число из скидки на количество
            }
            if ($currentDateTime->between($startDateTime, $endDateTime)) //проверка текущего времени с временем конца и начала скидки (4)
            {
                $date = $delivery_price - ($delivery_price * $item->tovar[0]->date_discount / 100); //если совпадает, то применяется скидка
            } else {
                $date = $delivery_price; //если не совпало, то берется цена с скидки на доставку
            }
        }


        return view('shop.client.shop-view', compact('items'));
    }
}
