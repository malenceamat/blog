<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $table = 'shop';
    protected $fillable = ['image', 'description', 'name', 'price'];

    public function tovar()
    {
        return $this->belongsToMany(Discount::class,'discount_shop','shop_id','discount_id');
    }
}
